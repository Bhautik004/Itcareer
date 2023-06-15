var itemContainers = [].slice.call(document.querySelectorAll('.board-column-content'));
var columnGrids = [];
var boardGrid;
var status_value;
var task_id;
var current_panel_status;
var release_panel_status;
var $this;
var timestatus;
var taskStartPer = $("#taskStartPermission").val();



// Define the column grids so we can drag those
// items around.
itemContainers.forEach(function (container) {

  // Instantiate column grid.
  var grid = new Muuri(container, {
    items: '.board-item',
    layoutDuration: 400,
    layoutEasing: 'ease',
    dragEnabled: true,
    dragSort: function () {
      return columnGrids;
    },
    dragStartPredicate: {
        distance: 50,
        delay: 50
    },
    dragSortInterval: 0,
    dragContainer: document.body,
    dragReleaseDuration: 400,
    dragReleaseEasing: 'ease'
  })


  .on('dragStart', function (item) {


    $this = $(item.getElement());
    current_panel_status = $(item.getElement()).find("#current_panel_status").val();
    status_value = $(item.getElement()).find('#status').val();
    task_id = $(item.getElement()).find('#task_id').val();
    timestatus = $(item.getElement()).find('#time_status').val();
    item.getElement().style.width = item.getWidth() + 'px';
    item.getElement().style.height = item.getHeight() + 'px';
    // callFunction();
  })
  .on('dragReleaseEnd', function (item) {


        item.getElement().style.width = '';
        item.getElement().style.height = '';
        columnGrids.forEach(function (grid) {
            grid.refreshItems();
        });
        release_panel_status =  $(grid.getElement()).find('#current_panel_status').val();
        $(grid.getElement()).find('#status').val(release_panel_status);
        endFunction();


    })

  .on('layoutStart', function () {
    boardGrid.refreshItems().layout();

  });
  columnGrids.push(grid);

});

boardGrid = new Muuri('.board', {
  layout: {
    horizontal: true,
  },
  layoutDuration: 400,
  layoutEasing: 'ease',

});




function endFunction()
{
    var getUrl = window.location;
    var baseUrl = getUrl .protocol + "//" + getUrl.host + "/laravel/" + getUrl.pathname.split('/')[2];
    var _token = $("input[name='_token']").val();



    if(release_panel_status != status_value){

        $.ajax({
            type:'post',
            url:'/admin/task/change-status',
            data: {
               _token:_token,
               status: status_value,
               task: task_id,
               release_panel_status:release_panel_status
            },
            success:function(data){
                toastr.options =
                {
                    "showDuration": "2000",
                    "hideDuration": "2000",
                    "timeOut": "2000",
                    "extendedTimeOut": "2000",
                    "positionClass": "toast-top-center",
                };
                 toastr.success(data.success);
                 var taskCount = data.taskCount;
                 var taskInProcessCount = data.taskInProcessCount;
                 var taskReviewCount = data.taskReviewCount;
                 var taskDoneCount = data.taskDoneCount;

                 var task_count = "TODO ( "+ taskCount + " )";
                 var task_inprocess = "WORKING ( " + taskInProcessCount + " )";
                 var taskReview_Count = "REVIEW ( "+ taskReviewCount + " )";
                 var taskDone_Count = "DONE ( " + taskDoneCount + " )";

                 $this.find('#status').val(release_panel_status);

                 if(release_panel_status == 1){
                    if($this.find('#time_status').val() == 1){
                        $this.find('.tool-body').append('<a href="#" class="btn btn-tool ml-2 logbtn" data-id="'+task_id+'"><i class="fa-regular fa-lg fa-circle-pause" ></i></a>');

                    }else{
                        $this.find('.tool-body').append('<a href="#" class="btn btn-tool ml-2 logbtn" data-id="'+task_id+'"><i class="fa-regular fa-lg fa-circle-play" ></i></a>');

                    }

                    if(taskStartPer == '0'){
                        $this.find('.logbtn').remove();
                    }

                }
                else{
                    $this.find('.logbtn').remove();
                }

                $(".noRecord").remove();

                if(taskCount == 0){
                    $('.todo > .board-column-content-wrapper > .board-column-content').append('<div class="noRecord "><p>No Record Data</p></div>');
                }
                if(taskInProcessCount == 0){
                    $('.working > .board-column-content-wrapper > .board-column-content').append('<div class="noRecord "><p>No Record Data</p></div>');
                }

                if(taskReviewCount == 0){
                    $('.review > .board-column-content-wrapper > .board-column-content').append('<div class="noRecord "><p>No Record Data</p></div>');
                }
                if(taskDoneCount == 0){
                    $('.done > .board-column-content-wrapper > .board-column-content').append('<div class="noRecord "><p>No Record Data</p></div>');
                }

                 $('.taskcount').text(task_count);
                 $('.inprocess').text(task_inprocess);
                 $('.taskReviewCount').text(taskReview_Count);
                 $('.taskDoneCount').text(taskDone_Count);
                 taskStartPer = $("#taskStartPermission").val();
                 location.reload();

             }
         });
    }

}



