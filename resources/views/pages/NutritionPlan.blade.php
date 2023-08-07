@extends('home')


@section('subheader')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">New Nutrition Plan</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Nutrition Plan</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
                  <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                      <span class="m-nav__link-text">Food List</span>
                    </a>
                  </li>
									

								</ul>
							</div>
							<div>
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="m-dropdown__wrapper" style="z-index: 101;">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 21.5px;"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">Quick Actions</span>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">Messages</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-info"></i>
																<span class="m-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																<span class="m-nav__link-text">Support</span>
															</a>
														</li>
														<li class="m-nav__separator m-nav__separator--fit">
														</li>
														<li class="m-nav__item">
															<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>






<!-- END: Subheader -->
@endsection




@section('content')

<div class="m-content">
						<div class="row">
							<div class="col-xl-9">

								<!--Begin::Main Portlet-->
								<div class="m-portlet">

									<!--begin: Portlet Head-->
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
												New Nutrition Plan

												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item">
													<a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="" data-original-title="Get help with filling up this form">
														<i class="flaticon-info m--icon-font-size-lg3"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>

									<!--end: Portlet Head-->

									<!--begin: Form Wizard-->
									<div class="m-wizard m-wizard--1 m-wizard--success m-wizard--step-first" id="m_wizard">

										<!--begin: Message container -->
										<div class="m-portlet__padding-x">

											<!-- Here you can put a message or alert -->
										</div>

										<!--end: Message container -->

										<!--begin: Form Wizard Head -->
										<div class="m-wizard__head m-portlet__padding-x">

											<!--begin: Form Wizard Progress -->
											<div class="m-wizard__progress">
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: calc(0% + 26px);"></div>
												</div>
											</div>

											<!--end: Form Wizard Progress -->

											<!--begin: Form Wizard Nav -->
											<div class="m-wizard__nav">
												<div class="m-wizard__steps">
													<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_1">
														<div class="m-wizard__step-info">
															<a href="#" class="m-wizard__step-number">
																<span><span>1</span></span>
															</a>
															<div class="m-wizard__step-line">
																<span></span>
															</div>
															<div class="m-wizard__step-label">
															Personal Data
															</div>
														</div>
													</div>
													<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
														<div class="m-wizard__step-info">
															<a href="#" class="m-wizard__step-number">
																<span><span>2</span></span>
															</a>
															<div class="m-wizard__step-line">
																<span></span>
															</div>
															<div class="m-wizard__step-label">
																Lifestyle Info
															</div>
														</div>
													</div>
													<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_3">
														<div class="m-wizard__step-info">
															<a href="#" class="m-wizard__step-number">
																<span><span>3</span></span>
															</a>
															<div class="m-wizard__step-line">
																<span></span>
															</div>
															<div class="m-wizard__step-label">
																Personal Goal
															</div>
														</div>
													</div>

													<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_4">
														<div class="m-wizard__step-info">
															<a href="#" class="m-wizard__step-number">
																<span><span>4</span></span>
															</a>
															<div class="m-wizard__step-line">
																<span></span>
															</div>
															<div class="m-wizard__step-label">
																Nutrient Plan
															</div>
														</div>
													</div>
                          <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_5">
                            <div class="m-wizard__step-info">
                              <a href="#" class="m-wizard__step-number">
                                <span><span>5</span></span>
                              </a>
                              <div class="m-wizard__step-line">
                                <span></span>
                              </div>
                              <div class="m-wizard__step-label">
                              Confirmation
                              </div>
                            </div>
                          </div>
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>

										<!--end: Form Wizard Head -->

										<!--begin: Form Wizard Form-->
										<div class="m-wizard__form">

											<!--
						1) Use m-form--label-align-left class to alight the form input lables to the right
						2) Use m-form--state class to highlight input control borders on form validation
					-->
											<form class="m-form m-form--label-align-left- m-form--state-" id="m_form" novalidate="novalidate">

												<!--begin: Form Body -->
												<div class="m-portlet__body">

													<!--begin: Form Wizard Step 1-->
													<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
														<div class="row">
															<div class="col-xl-8 offset-xl-2">
																<div class="m-form__section m-form__section--first">
																	<div class="m-form__heading">
																		<h3 class="m-form__heading-title">Client Details</h3>
																	</div>
                                  <div class="form-group m-form__group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">* Gendre:</label>
                                    <div class="col-xl-3 col-lg-3">
                                      <select name="sexe" class="form-control m-input">

                                        <option value="F">Female</option>
                                        <option value="H">Male</option>

                                      </select>
                                    </div>
                                  </div>
																	<div class="form-group m-form__group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">* Age:</label>
																		<div class="col-xl-3 col-lg-3">
																			<input type="text" name="age" class="form-control m-input" placeholder="" value="-">
																			<span class="m-form__help">Please enter your age</span>
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">* Height:</label>
																		<div class="col-xl-3 col-lg-3">
                                      <!--value par defaut el age emte3k  (modification)!-->
                                      <div class="input-group bootstrap-touchspin">
                                         <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                         <input id="m_touchspin_3" type="text" class="form-control m-input" value="-" name="height" placeholder="" style="display: block;">
                                         <span class="input-group-addon bootstrap-touchspin-postfix">cm</span>
                                      </div>

																		</div>
																	</div>
                                  <div class="form-group m-form__group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">* Weight:</label>
                                    <div class="col-xl-3 col-lg-3">
                                      <div class="input-group bootstrap-touchspin">
                                         <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                         <input id="m_touchspin_3" type="text" class="form-control m-input" value="-" name="weight" placeholder="" style="display: block;">
                                         <span class="input-group-addon bootstrap-touchspin-postfix">kg</span>
                                      </div>


                                    </div>
                                  </div>




																</div>


															</div>
														</div>
													</div>


													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="m-wizard__form-step" id="m_wizard_form_step_2">
														<div class="row">
															<div class="col-xl-8 offset-xl-2">
																<div class="m-form__section m-form__section--first">
																	<div class="m-form__heading">
																		<h3 class="m-form__heading-title">Account Details</h3>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-12">
																			<label class="form-control-label">* URL:</label>
																			<input type="url" name="account_url" class="form-control m-input" placeholder="" value="http://sinortech.vertoffice.com">
																			<span class="m-form__help">Please enter your preferred URL to your dashboard</span>
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-6 m-form__group-sub">
																			<label class="form-control-label">* Username:</label>
																			<input type="text" name="account_username" class="form-control m-input" placeholder="" value="nick.stone">
																			<span class="m-form__help">Your username to login to your dashboard</span>
																		</div>
																		<div class="col-lg-6 m-form__group-sub">
																			<label class="form-control-label">* Password:</label>
																			<input type="password" name="account_password" class="form-control m-input" placeholder="" value="qwerty">
																			<span class="m-form__help">Please use letters and at least one number and symbol</span>
																		</div>
																	</div>
																</div>
																<div class="m-separator m-separator--dashed m-separator--lg"></div>
																<div class="m-form__section">
																	<div class="m-form__heading">
																		<h3 class="m-form__heading-title">Client Settings</h3>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-6 m-form__group-sub">
																			<label class="form-control-label">* User Group:</label>
																			<div class="m-radio-inline">
																				<label class="m-radio m-radio--solid m-radio--brand">
																					<input type="radio" name="account_group" checked="" value="2"> Sales Person
																					<span></span>
																				</label>
																				<label class="m-radio m-radio--solid m-radio--brand">
																					<input type="radio" name="account_group" value="2"> Customer
																					<span></span>
																				</label>
																			</div>
																			<span class="m-form__help">Please select user group</span>
																		</div>
																		<div class="col-lg-6 m-form__group-sub">
																			<label class="form-control-label">* Communications:</label>
																			<div class="m-checkbox-inline">
																				<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
																					<input type="checkbox" name="account_communication[]" checked="" value="email"> Email
																					<span></span>
																				</label>
																				<label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
																					<input type="checkbox" name="account_communication[]" value="sms"> SMS
																					<span></span>
																				</label>
																				<label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
																					<input type="checkbox" name="account_communication[]" value="phone"> Phone
																					<span></span>
																				</label>
																			</div>
																			<span class="m-form__help">Please select user communication options</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="m-wizard__form-step" id="m_wizard_form_step_3">
														<div class="row">
															<div class="col-xl-8 offset-xl-2">
																<div class="m-form__section m-form__section--first">
																	<div class="m-form__heading">
																		<h3 class="m-form__heading-title">Billing Information</h3>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-12">
																			<label class="form-control-label">* Cardholder Name:</label>
																			<input type="text" name="billing_card_name" class="form-control m-input" placeholder="" value="Nick Stone">
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-12">
																			<label class="form-control-label">* Card Number:</label>
																			<input type="text" name="billing_card_number" class="form-control m-input" placeholder="" value="372955886840581">
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-4 m-form__group-sub">
																			<label class="form-control-label">* Exp Month:</label>
																			<select class="form-control m-input" name="billing_card_exp_month">
																				<option value="">Select</option>
																				<option value="01">01</option>
																				<option value="02">02</option>
																				<option value="03">03</option>
																				<option value="04" selected="">04</option>

																				<option value="12">12</option>
																			</select>
																		</div>
																		<div class="col-lg-4 m-form__group-sub">
																			<label class="form-control-label">* Exp Year:</label>
																			<select class="form-control m-input" name="billing_card_exp_year">
																				<option value="">Select</option>

																			</select>
																		</div>
																		<div class="col-lg-4 m-form__group-sub">
																			<label class="form-control-label">* CVV:</label>
																			<input type="number" class="form-control m-input" name="billing_card_cvv" placeholder="" value="450">
																		</div>
																	</div>
																</div>
																<div class="m-separator m-separator--dashed m-separator--lg"></div>
																<div class="m-form__section">
																	<div class="m-form__heading">
																		<h3 class="m-form__heading-title">Billing Address <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="If different than the corresponding address"></i></h3>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-12">
																			<label class="form-control-label">* Address 1:</label>
																			<input type="text" name="billing_address_1" class="form-control m-input" placeholder="" value="Headquarters 1120 N Street Sacramento 916-654-5266">
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-12">
																			<label class="form-control-label">Address 2:</label>
																			<input type="text" name="billing_address_2" class="form-control m-input" placeholder="" value="P.O. Box 942873 Sacramento, CA 94273-0001">
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-5 m-form__group-sub">
																			<label class="form-control-label">* City:</label>
																			<input type="text" class="form-control m-input" name="billing_city" placeholder="" value="Polo Alto">
																		</div>
																		<div class="col-lg-5 m-form__group-sub">
																			<label class="form-control-label">* State:</label>
																			<input type="text" class="form-control m-input" name="billing_state" placeholder="" value="California">
																		</div>
																		<div class="col-lg-2 m-form__group-sub">
																			<label class="form-control-label">* ZIP:</label>
																			<input type="text" class="form-control m-input" name="billing_zip" placeholder="" value="34890">
																		</div>
																	</div>
																</div>
																<div class="m-separator m-separator--dashed m-separator--lg"></div>
																<div class="m-form__section">
																	<div class="m-form__heading">
																		<h3 class="m-form__heading-title">Delivery Type</h3>
																	</div>
																	<div class="form-group m-form__group">
																		<div class="row">
																			<div class="col-lg-6">
																				<label class="m-option">
																					<span class="m-option__control">
																						<span class="m-radio m-radio--state-brand">
																							<input type="radio" name="billing_delivery" value="">
																							<span></span>
																						</span>
																					</span>
																					<span class="m-option__label">
																						<span class="m-option__head">
																							<span class="m-option__title">
																								Standart Delevery
																							</span>
																							<span class="m-option__focus">
																								Free
																							</span>
																						</span>
																						<span class="m-option__body">
																							Estimated 14-20 Day Shipping
																							(&nbsp;Duties end taxes may be due
																							upon delivery&nbsp;)
																						</span>
																					</span>
																				</label>
																			</div>
																			<div class="col-lg-6">
																				<label class="m-option">
																					<span class="m-option__control">
																						<span class="m-radio m-radio--state-brand">
																							<input type="radio" name="billing_delivery" value="">
																							<span></span>
																						</span>
																					</span>
																					<span class="m-option__label">
																						<span class="m-option__head">
																							<span class="m-option__title">
																								Fast Delevery
																							</span>
																							<span class="m-option__focus">
																								$&nbsp;8.00
																							</span>
																						</span>
																						<span class="m-option__body">
																							Estimated 2-5 Day Shipping
																							(&nbsp;Duties end taxes may be due
																							upon delivery&nbsp;)
																						</span>
																					</span>
																				</label>
																			</div>
																		</div>
																		<div class="m-form__help">

																			<!--must use this helper element to display error message for the options-->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="m-wizard__form-step" id="m_wizard_form_step_4">
														<div class="row">
															<div class="col-xl-8 offset-xl-2">

																<!--begin::Section-->
																<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">

																	<!--begin::Item-->
																	<div class="m-accordion__item active">
																		<div class="m-accordion__item-head" role="tab" id="m_accordion_1_item_1_head" data-toggle="collapse" href="#m_accordion_1_item_1_body" aria-expanded="  false">
																			<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
																			<span class="m-accordion__item-title">1. Client Information</span>
																			<span class="m-accordion__item-mode"></span>
																		</div>
																		<div class="m-accordion__item-body collapse show" id="m_accordion_1_item_1_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1">

																			<!--begin::Content-->
																			<div class="tab-content  m--padding-30">
																				<div class="m-form__section m-form__section--first">
																					<div class="m-form__heading">
																						<h4 class="m-form__heading-title">Account Details</h4>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">URL:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">sinortech.vertoffice.com</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Username:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">sinortech.admin</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Password:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">*********</span>
																						</div>
																					</div>
																				</div>
																				<div class="m-separator m-separator--dashed m-separator--lg"></div>
																				<div class="m-form__section">
																					<div class="m-form__heading">
																						<h4 class="m-form__heading-title">Client Settings</h4>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">User Group:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">Customer</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Communications:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">Phone, Email</span>
																						</div>
																					</div>
																				</div>
																			</div>

																			<!--end::Content-->
																		</div>
																	</div>

																	<!--end::Item-->

																	<!--begin::Item-->
																	<div class="m-accordion__item">
																		<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_2_head" data-toggle="collapse" href="#m_accordion_1_item_2_body" aria-expanded="    false">
																			<span class="m-accordion__item-icon"><i class="fa  flaticon-placeholder"></i></span>
																			<span class="m-accordion__item-title">2. Account Setup</span>
																			<span class="m-accordion__item-mode"></span>
																		</div>
																		<div class="m-accordion__item-body collapse" id="m_accordion_1_item_2_body" role="tabpanel" aria-labelledby="m_accordion_1_item_2_head" data-parent="#m_accordion_1">

																			<!--begin::Content-->
																			<div class="tab-content  m--padding-30">
																				<div class="m-form__section m-form__section--first">
																					<div class="m-form__heading">
																						<h4 class="m-form__heading-title">Account Details</h4>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">URL:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">sinortech.vertoffice.com</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Username:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">sinortech.admin</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Password:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">*********</span>
																						</div>
																					</div>
																				</div>
																				<div class="m-separator m-separator--dashed m-separator--lg"></div>
																				<div class="m-form__section">
																					<div class="m-form__heading">
																						<h4 class="m-form__heading-title">Client Settings</h4>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">User Group:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">Customer</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Communications:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">Phone, Email</span>
																						</div>
																					</div>
																				</div>
																			</div>

																			<!--end::Content-->
																		</div>
																	</div>

																	<!--end::Item-->

																	<!--begin::Item-->
																	<div class="m-accordion__item">
																		<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_3_head" data-toggle="collapse" href="#m_accordion_1_item_3_body" aria-expanded="    false">
																			<span class="m-accordion__item-icon"><i class="fa  flaticon-alert-2"></i></span>
																			<span class="m-accordion__item-title">3. Billing Setup</span>
																			<span class="m-accordion__item-mode"></span>
																		</div>
																		<div class="m-accordion__item-body collapse" id="m_accordion_1_item_3_body" role="tabpanel" aria-labelledby="m_accordion_1_item_3_head" data-parent="#m_accordion_1">
																			<div class="tab-content  m--padding-30">
																				<div class="m-form__section m-form__section--first">
																					<div class="m-form__heading">
																						<h4 class="m-form__heading-title">Billing Information</h4>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Cardholder Name:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">Nick Stone</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Card Number:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">*************4589</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Exp Month:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">10</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Exp Year:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">2018</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">CVV:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">***</span>
																						</div>
																					</div>
																				</div>
																				<div class="m-separator m-separator--dashed m-separator--lg"></div>
																				<div class="m-form__section">
																					<div class="m-form__heading">
																						<h4 class="m-form__heading-title">Billing Address</h4>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Address Line 1:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">Headquarters 1120 N Street Sacramento 916-654-5266</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Address Line 2:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">P.O. Box 942873 Sacramento, CA 94273-0001</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">City:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">Polo Alto</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">State:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">California</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">ZIP:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">37505</span>
																						</div>
																					</div>
																					<div class="form-group m-form__group m-form__group--sm row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Country:</label>
																						<div class="col-xl-8 col-lg-8">
																							<span class="m-form__control-static">USA</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<!--end::Item-->
																</div>

																<!--end::Section-->
																<div class="m-separator m-separator--dashed m-separator--lg"></div>
																<div class="form-group m-form__group m-form__group--sm row">
																	<div class="col-xl-12">
																		<div class="m-checkbox-inline">
																			<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
																				<input type="checkbox" name="accept" value="1">
																				Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement
																				<span></span>
																			</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 4-->
												</div>

												<!--end: Form Body -->

												<!--begin: Form Actions -->
												<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
													<div class="m-form__actions m-form__actions">
														<div class="row">
															<div class="col-lg-2"></div>
															<div class="col-lg-4 m--align-left">
																<button class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
																	<span>
																		<i class="la la-arrow-left"></i>&nbsp;&nbsp;
																		<span>Back</span>
																	</span>
																</button>
															</div>
															<div class="col-lg-4 m--align-right">
																<button class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
																	<span>
																		<i class="la la-check"></i>&nbsp;&nbsp;
																		<span>Submit</span>
																	</span>
																</button>
																<button class="btn btn-warning m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
																	<span>
																		<span>Save &amp; Continue</span>&nbsp;&nbsp;
																		<i class="la la-arrow-right"></i>
																	</span>
																</button>
															</div>
															<div class="col-lg-2"></div>
														</div>
													</div>
												</div>

												<!--end: Form Actions -->
											</form>
										</div>

										<!--end: Form Wizard Form-->
									</div>

									<!--end: Form Wizard-->
								</div>

								<!--End::Main Portlet-->
							</div>
							<div class="col-xl-3">
								<div class="m-portlet">
									<div class="m-portlet__body">
										<div class="m-section">
											<h2 class="m-section__heading">Important</h2>
											<div class="m-section__content">
												<p>
													Healthy nutrition and eating the right foods is vital for achieving great results and live a healthy lifestyle. Based on your biometric data, your lifestyle and your personal goal, a tailor-made nutrition plan will be generated. This plan will help you reach your goal. Please check the information on the left and correct them when necessary. Then click Next to continue
												</p>
												<p>
													A healthy diet consists of plenty of whole grain foods, fruits, vegetables and nuts. For example, getting all your carbs from fast foods is not a healthy way to go!
												</p>
											</div>
										</div>


										<!--end: Form Body -->
									</div>
								</div>
							</div>
						</div>
					</div>




@endsection
