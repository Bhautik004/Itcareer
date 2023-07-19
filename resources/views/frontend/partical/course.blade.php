@foreach($details as $course)
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-6eadd97 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="6eadd97" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-a952c69"
                                    data-id="a952c69" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2a66015 elementor-widget elementor-widget-heading"
                                            data-id="2a66015" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">{{$course->name}}</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-75fb61f elementor-widget elementor-widget-heading"
                                            data-id="75fb61f" data-element_type="widget"
                                            data-widget_type="heading.default">
                                              <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default"  style="border-style: dotted none dotted none; display: flex"><label style="padding-left: 500px; font-size: 20px;">Duration :  {{$course->duration}}</label></h5>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-201f4fb elementor-widget elementor-widget-text-editor"
                                            data-id="201f4fb" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    <strong>{!! $course->content !!}</strong><br />
                                              
                                                    <strong>Any More….</strong></p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-fd6b452 elementor-align-left elementor-widget elementor-widget-button"
                                            data-id="fd6b452" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="#"
                                                        class="elementor-button-link elementor-button elementor-size-xl"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Register now</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ade029c"
                                    data-id="ade029c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-999ad74 elementor-widget elementor-widget-image"
                                            data-id="999ad74" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.12.1 - 02-04-2023 */
                                                    .elementor-widget-image {
                                                        text-align: center
                                                    }

                                                    .elementor-widget-image a {
                                                        display: inline-block
                                                    }

                                                    .elementor-widget-image a img[src$=".svg"] {
                                                        width: 48px
                                                    }

                                                    .elementor-widget-image img {
                                                        vertical-align: middle;
                                                        display: inline-block
                                                    }
                                                </style> <img decoding="async" width="750" height="524"
                                                    src="course_img/{{$course->course_img}}"
                                                    class="attachment-large size-large wp-image-4216" alt=""
                                                    loading="lazy"
                                                    srcset="course_img/{{$course->course_img}}"
                                                    sizes="(max-width: 750px) 100vw, 750px" />
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </section>
                        @endforeach