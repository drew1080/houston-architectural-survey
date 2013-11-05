
	<div class="edit_slide_wrapper">

		<div class="editor_buttons_wrapper  postbox unite-postbox mw960">
			<h3 class="box-closed tp-accordion"><span class="postbox-arrow2">-</span><span><?php _e("Slider Main Image / Background",REVSLIDER_TEXTDOMAIN) ?></span></h3>
			<div class="toggled-content">
					<div class="inner_wrapper p10 pb0 pt0 boxsized">
						<div class="editor_buttons_wrapper_top">
							<input type="radio" name="radio_bgtype" data-bgtype="image" id="radio_back_image" <?php if($bgType == "image") echo 'checked="checked"'?> >
							<label for="radio_back_image"><?php _e("Image BG",REVSLIDER_TEXTDOMAIN)?></label>
							<a href="javascript:void(0)" id="button_change_image" class="button-primary revblue <?php if($bgType != "image") echo "button-disabled" ?>" style="margin-bottom:5px"><?php _e("Change Image",REVSLIDER_TEXTDOMAIN)?></a>

							<span class="hor_sap"></span>

							<input type="radio" name="radio_bgtype" data-bgtype="trans" id="radio_back_trans" <?php if($bgType == "trans") echo 'checked="checked"'?>>
							<label for="radio_back_trans"><?php _e("Transparent BG",REVSLIDER_TEXTDOMAIN)?></label>

							<span class="hor_sap"></span>

							<input type="radio" name="radio_bgtype" data-bgtype="solid" id="radio_back_solid" <?php if($bgType == "solid") echo 'checked="solid"'?>>
							<label for="radio_back_solid"><?php _e("Solid BG",REVSLIDER_TEXTDOMAIN)?></label>
							<input type="text" name="bg_color" id="slide_bg_color" <?php echo $bgSolidPickerProps?> value="<?php echo $slideBGColor?>">
							
							<input type="radio" name="radio_bgtype" data-bgtype="external" id="radio_back_external" <?php if($bgType == "external") echo 'checked="solid"'?>>
							<label for="radio_back_external"><?php _e("External URL",REVSLIDER_TEXTDOMAIN)?></label>
							<input type="text" name="bg_external" id="slide_bg_external" value="<?php echo $slideBGExternal?>" <?php echo ($bgType != 'external') ? ' class="disabled"' : ''; ?>>
							<a href="javascript:void(0)" id="button_change_external" class="button-primary revblue <?php if($bgType != "external") echo "button-disabled" ?>" style="margin-bottom:5px"><?php _e("Get External",REVSLIDER_TEXTDOMAIN)?></a>
							
							<a href="javascript:void(0)" id="button_preview_slide" class="button-primary revbluedark" title="Preview Slide"><i class="revicon-search-1"></i><?php _e("Preview Slide",REVSLIDER_TEXTDOMAIN)?></a>
						</div>
						<div style="margin-top:10px">
							<label for="slide_bg_fit"><?php _e("Background Fit:",REVSLIDER_TEXTDOMAIN)?></label>
							<select name="bg_fit" id="slide_bg_fit" style="margin-right:20px">
								<option value="cover"<?php if($bgFit == 'cover') echo ' selected="selected"'; ?>>cover</option>
								<option value="contain"<?php if($bgFit == 'contain') echo ' selected="selected"'; ?>>contain</option>
								<option value="percentage"<?php if($bgFit == 'percentage') echo ' selected="selected"'; ?>>(%, %)</option>
								<option value="normal"<?php if($bgFit == 'normal') echo ' selected="selected"'; ?>>normal</option>
							</select>
							<input name="bg_fit_x" style="<?php if($bgFit != 'percentage') echo 'display: none; '; ?> width:60px;margin-right:10px" value="<?php echo $bgFitX; ?>" />
							<input name="bg_fit_y" style="<?php if($bgFit != 'percentage') echo 'display: none; '; ?> width:60px;margin-right:10px"  value="<?php echo $bgFitY; ?>" />
							
							<label for="slide_bg_repeat"><?php _e("Background Repeat:",REVSLIDER_TEXTDOMAIN)?></label>
							<select name="bg_repeat" id="slide_bg_repeat" style="margin-right:20px">
								<option value="no-repeat"<?php if($bgRepeat == 'no-repeat') echo ' selected="selected"'; ?>>no-repeat</option>
								<option value="repeat"<?php if($bgRepeat == 'repeat') echo ' selected="selected"'; ?>>repeat</option>
								<option value="repeat-x"<?php if($bgRepeat == 'repeat-x') echo ' selected="selected"'; ?>>repeat-x</option>
								<option value="repeat-y"<?php if($bgRepeat == 'repeat-y') echo ' selected="selected"'; ?>>repeat-y</option>
							</select>
							
							<label for="slide_bg_position"><?php _e("Background Position:",REVSLIDER_TEXTDOMAIN)?></label>
							<select name="bg_position" id="slide_bg_position">
								<option value="left top"<?php if($bgPosition == 'left top') echo ' selected="selected"'; ?>>left top</option>
								<option value="left center"<?php if($bgPosition == 'left center') echo ' selected="selected"'; ?>>left center</option>
								<option value="left bottom"<?php if($bgPosition == 'left bottom') echo ' selected="selected"'; ?>>left bottom</option>
								<option value="right top"<?php if($bgPosition == 'right top') echo ' selected="selected"'; ?>>right top</option>
								<option value="right center"<?php if($bgPosition == 'right center') echo ' selected="selected"'; ?>>right center</option>
								<option value="right bottom"<?php if($bgPosition == 'right bottom') echo ' selected="selected"'; ?>>right bottom</option>
								<option value="center top"<?php if($bgPosition == 'center top') echo ' selected="selected"'; ?>>center top</option>
								<option value="center right"<?php if($bgPosition == 'center right') echo ' selected="selected"'; ?>>center right</option>
								<option value="center bottom"<?php if($bgPosition == 'center bottom') echo ' selected="selected"'; ?>>center bottom</option>
								<option value="percentage"<?php if($bgPosition == 'percentage') echo ' selected="selected"'; ?>>(x%, y%)</option>
							</select>
							<input name="bg_position_x" <?php if($bgPosition != 'percentage') echo ' style="display: none;"'; ?> value="<?php echo $bgPositionX; ?>" />
							<input name="bg_position_y" <?php if($bgPosition != 'percentage') echo ' style="display: none;"'; ?> value="<?php echo $bgPositionY; ?>" />
							
						</div>
					</div>

					<div class="clear"></div>
			</div>

		</div>

		<div class="clear"></div>

		


		<div class="divide20"></div>
			

		<div style="margin-left: -19px;margin-right: -15px;padding: 20px 0 20px 20px;background: #f5f5f5;border-top:1px solid #f1f1f1;border-bottom:1px solid #f1f1f1;">
			<div id="divLayers" class="<?php echo $divLayersClass?>" style="<?php echo $style?>"></div>
			<div class="clear"></div>
			<div class="editor_buttons_wrapper  postbox unite-postbox mw960">

			<div class="toggled-content">
					<div class="inner_wrapper p10 pb0 pt0 boxsized">

						<div class="editor_buttons_wrapper_bottom">
							<div style="float:left">
								<a href="javascript:void(0)" id="button_add_layer" 		class="button-primary revblue"><i class="revicon-layers-alt"></i><?php _e("Add Layer",REVSLIDER_TEXTDOMAIN)?></a>
								<a href="javascript:void(0)" id="button_add_layer_image" class="button-primary revblue"><i class="revicon-picture-1"></i><?php _e("Add Layer: Image",REVSLIDER_TEXTDOMAIN)?> </a>
								<a href="javascript:void(0)" id="button_add_layer_video"  class="button-primary revblue"><i class="revicon-video"></i><?php _e("Add Layer: Video",REVSLIDER_TEXTDOMAIN)?> </a>
								<a href="javascript:void(0)" id="button_duplicate_layer" class="button-primary revyellow button-disabled"><i class="revicon-picture"></i><?php _e("Duplicate Layer",REVSLIDER_TEXTDOMAIN)?></a>
							</div>
							<div style="float:right; ">
								<a href="javascript:void(0)" id="button_delete_layer"    class="button-primary  revred button-disabled"><i class="revicon-trash"></i><?php _e("Delete Layer",REVSLIDER_TEXTDOMAIN)?></a>
								<a href="javascript:void(0)" id="button_delete_all"      class="button-primary  revred button-disabled"><i class="revicon-trash"></i><?php _e("Delete All Layers",REVSLIDER_TEXTDOMAIN)?> </a>								
							</div>


						</div>
					</div>

					<div class="clear"></div>
			</div>
		</div>
		</div>
		<div class="clear"></div>
		<div class="divide20"></div>
					<div class="layer_props_wrapper">

					<!-----  Left Layers Form ------>

						<div class="edit_layers_left">

							<form name="form_layers" id="form_layers">
								<script type='text/javascript'>
									g_settingsObj['form_layers'] = {}
								</script>

								<!-- THE GENERAL LAYER PARAMETERS -->
								<div class='settings_wrapper'>
									<div class="postbox unite-postbox">
										<h3 class='no-accordion tp-accordion'><span class="postbox-arrow2">-</span>
											<span><?php _e("Layer General Parameters",REVSLIDER_TEXTDOMAIN)?> </span>
																		</h3>
										<div class="toggled-content tp-closeifotheropen">
											<ul class="list_settings">
												<li id="end_layer_sap" class="attribute_title" style="">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("Layer Content",REVSLIDER_TEXTDOMAIN)?></span>
													<hr>
												</li>
												<?php
													$s = $settingsLayerOutput;
													$s->drawSettingsByNames("layer_caption");

													//add css editor
													$s->drawCssEditor();
													
													//add global styles editor
													$s->drawGlobalCssEditor();

													$s->drawSettingsByNames("layer_text,button_edit_video,button_change_image_source,layer_alt");
												?>
												<li style="clear:both">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("Align & Position",REVSLIDER_TEXTDOMAIN)?></span>
													<hr>
												</li>
												<li class="align_table_wrapper">
													<table id="align_table" class="align_table table_disabled">
														<tr>
															<td><a href="javascript:void(0)" id="linkalign_left_top" data-hor="left" data-vert="top"></a></td>
															<td><a href="javascript:void(0)" id="linkalign_center_top" data-hor="center" data-vert="top"></a></td>
															<td><a href="javascript:void(0)" id="linkalign_right_top" data-hor="right" data-vert="top"></a></td>
														</tr>
														<tr>
															<td><a href="javascript:void(0)" id="linkalign_left_middle" data-hor="left" data-vert="middle"></a></td>
															<td><a href="javascript:void(0)" id="linkalign_center_middle" data-hor="center" data-vert="middle"></a></td>
															<td><a href="javascript:void(0)" id="linkalign_right_middle" data-hor="right" data-vert="middle"></a></td>
														</tr>
														<tr>
															<td><a href="javascript:void(0)" id="linkalign_left_bottom" data-hor="left" data-vert="bottom"></a></td>
															<td><a href="javascript:void(0)" id="linkalign_center_bottom" data-hor="center" data-vert="bottom"></a></td>
															<td><a href="javascript:void(0)" id="linkalign_right_bottom" data-hor="right" data-vert="bottom"></a></td>
														</tr>
													</table>
												</li>

												<?php
											    	$s->drawSettingsByNames("layer_left,layer_top");
											    	$s->drawSettingsByNames("layer_align_hor,layer_align_vert");
											    ?>


												<li id="layer_scale_title_row" style="clear:both;">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("Image Scale (dimensions in pixel)",REVSLIDER_TEXTDOMAIN)?></span>	<a id="reset-scale" href="javascript:void(0);"><?php echo _e("reset",REVSLIDER_TEXTDOMAIN)?></a>
													<hr>
												</li>
												<?php
													$s->drawSettingsByNames("layer_scaleX,layer_scaleY");
													$s->drawSettingsByNames("layer_proportional_scale");
												?>

											</ul>
											<div class="clear"></div>
										</div>
									</div>
								</div>

								<!-- THE ANIMATION PARAMETERS -->
								<div class='settings_wrapper'>
									<div class="postbox unite-postbox">
										<h3 class='no-accordion tp-accordion tpa-closed'><span class="postbox-arrow2">+</span>
											<span><?php _e("Layer Animation",REVSLIDER_TEXTDOMAIN)?> </span>
										</h3>
										<div class="toggled-content tp-closedatstart tp-closeifotheropen">
											<ul class="list_settings">

												<!--LAYER START ANIMATION -->
												<li id="end_layer_sap" class="attribute_title" style="">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("Preview Transition (Star end Endtime is Ignored during Demo)",REVSLIDER_TEXTDOMAIN)?></span>
													<hr>
												</li>
												<div id="preview_caption_transition">

													<div class="preview_caption_wrapper">
														<div id="preview_caption_animateme">LAYER EXAMPLE</div>
													</div>
													
													<div id="preview_looper"><i class="revicon-arrows-ccw"></i><span class="replyinfo">ON</span></div>
												</div>

												<div class="divide10"></div>

												<!--LAYER START ANIMATION -->
												<li id="end_layer_sap" class="attribute_title" style="">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("Start Transition",REVSLIDER_TEXTDOMAIN)?></span>													
													<hr>
												</li>
												<div class="layer-animations">
													<div style="float:left;margin-right:10px;"><?php
												    	$s->drawSettingsByNames("layer_animation");
												    ?></div>
												    
												    <a href="javascript:void(0)" id="add_customanimation_in" 	class="button-primary revblue"><i class="revicon-equalizer"></i><?php _e("Custom Animation",REVSLIDER_TEXTDOMAIN)?></a>
												    <div class="clear"></div>
												    <?php
												    	$s->drawSettingsByNames("layer_easing,layer_speed");
												    ?>
												</div>
												<!--LAYER END ANIMATION -->
												<li id="end_layer_sap" class="attribute_title" style="">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("End Transition (optional)",REVSLIDER_TEXTDOMAIN)?></span>
													<hr>
												</li>
												<div class="layer-animations">
												<div style="float:left;margin-right:10px;"><?php
												    	$s->drawSettingsByNames("layer_endanimation");
												    ?></div>
												    
												    <a href="javascript:void(0)" id="add_customanimation_out" 	class="button-primary revblue"><i class="revicon-equalizer"></i><?php _e("Custom Animation",REVSLIDER_TEXTDOMAIN)?></a>
												    <div class="clear"></div>
												    <?php
												    	$s->drawSettingsByNames("layer_endeasing,layer_endspeed,layer_endtime");
												    ?>
												
												</div>


											</ul>
											<div class="clear"></div>
										</div>
									</div>
								</div><!-- END OF ANIMATION PARAMETERS -->


								<!-- LAYER ANIMATION EDITOR -->
								<div id="layeranimeditor_wrap" title="Layer Animation Editor" style="display:none;margin-bottom:0px; padding-bottom:0px;">
									<div class="tp-present-wrapper-parent">
										<div class="tp-present-wrapper">
											<div class="tp-present-caption">	
												<div id="caption_custon_anim_preview" class="">LAYER EXAMPLE</div>
											</div>
										</div>
									</div>
									<div class="caption-demo-controll">
										<div class="caption-speed-controll">
											<input class="css_edit_novice tpshortinput" style="margin-top:3px" name="captionspeed" type="text" value="600" />ms
										</div>
										
										<div class="caption-easing-controll">
											<select id="caption-easing-demo" name="caption-easing-demo" class="">
												<option value="Linear.easeNone">Linear.easeNone</option>
												<option value="Power0.easeIn">Power0.easeIn  (linear)</option>
												<option value="Power0.easeInOut">Power0.easeInOut  (linear)</option>
												<option value="Power0.easeOut">Power0.easeOut  (linear)</option>
												<option value="Power1.easeIn">Power1.easeIn</option>
												<option value="Power1.easeInOut">Power1.easeInOut</option>
												<option value="Power1.easeOut">Power1.easeOut</option>
												<option value="Power2.easeIn">Power2.easeIn</option>
												<option value="Power2.easeInOut">Power2.easeInOut</option>
												<option value="Power2.easeOut">Power2.easeOut</option>
												<option value="Power3.easeIn">Power3.easeIn</option>
												<option value="Power3.easeInOut">Power3.easeInOut</option>
												<option value="Power3.easeOut">Power3.easeOut</option>
												<option value="Power4.easeIn">Power4.easeIn</option>
												<option value="Power4.easeInOut">Power4.easeInOut</option>
												<option value="Power4.easeOut">Power4.easeOut</option>														
												<option value="Back.easeIn">Back.easeIn</option>
												<option value="Back.easeInOut">Back.easeInOut</option>
												<option value="Back.easeOut">Back.easeOut</option>
												<option value="Bounce.easeIn">Bounce.easeIn</option>
												<option value="Bounce.easeInOut">Bounce.easeInOut</option>
												<option value="Bounce.easeOut">Bounce.easeOut</option>
												<option value="Circ.easeIn">Circ.easeIn</option>
												<option value="Circ.easeInOut">Circ.easeInOut</option>
												<option value="Circ.easeOut">Circ.easeOut</option>
												<option value="Elastic.easeIn">Elastic.easeIn</option>
												<option value="Elastic.easeInOut">Elastic.easeInOut</option>
												<option value="Elastic.easeOut">Elastic.easeOut</option>
												<option value="Expo.easeIn">Expo.easeIn</option>
												<option value="Expo.easeInOut">Expo.easeInOut</option>
												<option value="Expo.easeOut">Expo.easeOut</option>
												<option value="Sine.easeIn">Sine.easeIn</option>
												<option value="Sine.easeInOut">Sine.easeInOut</option>
												<option value="Sine.easeOut">Sine.easeOut</option>
												<option value="SlowMo.ease">SlowMo.ease</option>
											</select>											
										</div>
										
										<div id="caption-inout-controll" class="caption-inout-controll">
											<i id="revshowmetheinanim" class="revicon-login reviconinaction"></i><i id="revshowmetheoutanim" class="revicon-logout"></i><?php _e("Transition Direction",REVSLIDER_TEXTDOMAIN)?>
										</div>
										<div class="clear"></div>
										<div style="font-size: 9px;text-align: right;margin-top: 2px;"><?php _e("*Easing, Direction and Speed only for Preview",REVSLIDER_TEXTDOMAIN)?></div>

									</div>
										<div class="divide20"></div>
										<div class="settings_wrapper">
											<div class="postbox unite-postbox">
												<h3 class="no-accordion tp-accordion">
													<span style="font-size:13px;padding-left:4px;"><i class="revicon-equalizer"></i><?php _e("Layer Animation Settings Panel",REVSLIDER_TEXTDOMAIN)?></span> 
													<span style="float: right;"><a href="javascript:void(0);" id="set-random-animation"><?php _e("random",REVSLIDER_TEXTDOMAIN)?></a></span>
												</h3>
											
												<table style="border-spacing:0px">
												
													<!-- TRANSITION -->
	
													<tr class="css-edit-title graybasicbg" ><td colspan="6" style="padding:10px"><?php _e("Transition",REVSLIDER_TEXTDOMAIN)?></td></tr>
													
													<tr class="graybasicbg">																										
														<td><?php _e("X:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="padding-bottom:15px">
															<div id='caption-movex-slider' class="rotationsliders"></div>
															<input class="css_edit_novice tpshortinput" name="movex" type="text" value="0" />px
														</td>
														
														<td><?php _e("Y:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="padding-bottom:15px">
															<div id='caption-movey-slider' class="rotationsliders"></div>
															<input class="css_edit_novice tpshortinput" name="movey" type="text" value="0" />px
														</td>
	
														<td><?php _e("Z:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="padding-bottom:15px">
															<div id='caption-movez-slider' class="rotationsliders"></div>
															<input class="css_edit_novice tpshortinput" name="movez" type="text" value="0" />px
														</td>
	
													</tr>
													
													<!-- ROTATION -->												
	
													<tr class="css-edit-title"><td colspan="6" style="padding:10px"><?php _e("Rotation",REVSLIDER_TEXTDOMAIN) ?></td></tr>
													<tr>																										
														<td><?php _e("X:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="padding-bottom:15px">
															<div id='caption-rotationx-slider' class="rotationsliders"></div>
															<input class="css_edit_novice tpshortinput" name="rotationx" type="text" value="0" />°
														</td>
														
														<td><?php _e("Y:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="padding-bottom:15px">
															<div id='caption-rotationy-slider' class="rotationsliders"></div>
															<input class="css_edit_novice tpshortinput" name="rotationy" type="text" value="0" />°
														</td>
	
														<td><?php _e("Z:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="padding-bottom:15px">
															<div id='caption-rotationz-slider' class="rotationsliders"></div>
															<input class="css_edit_novice tpshortinput" name="rotationz" type="text" value="0" />°
														</td>
	
													</tr>
																
												</table>
												<table style="border-spacing:0px">							
													<!-- SCALE && SKEW-->												
	
													<tr class="css-edit-title graybasicbg">
														<td colspan="4" style="padding:10px"><?php _e("Scale",REVSLIDER_TEXTDOMAIN) ?></td>
														<td colspan="4" style="padding:10px;padding-left:20px"><?php _e("Skew",REVSLIDER_TEXTDOMAIN) ?></td>
													</tr>
													
													<tr class="graybasicbg">									
														<!-- SCALE X -->																			
														<td style="width:30px"><?php _e("X:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="width:100px; padding-bottom:15px; ">
															<div id='caption-scalex-slider' class="rotationsliders"  style="width:100px !important;"></div>
															<input class="css_edit_novice tpshortinput" name="scalex" type="text" value="0" />%
														</td>
														<!-- SCALE Y -->																																
														<td style="width:30px;"><?php _e("Y:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="width:100px; padding-bottom:15px; ">
															<div id='caption-scaley-slider' class="rotationsliders"  style="width:100px;"></div>
															<input class="css_edit_novice tpshortinput" name="scaley" type="text" value="0" />%
														</td>
														<td style="width:30px;"><?php _e("X:",REVSLIDER_TEXTDOMAIN) ?></td>
														<!-- SKEW X -->																																
														<td style="width:100px; padding-bottom:15px; ">
															<div id='caption-skewx-slider' class="rotationsliders" style="width:100px;"></div>
															<input class="css_edit_novice tpshortinput" name="skewx" type="text" value="0" />°
														</td>
														
														<td style="width:30px"><?php _e("Y:",REVSLIDER_TEXTDOMAIN) ?></td>
														<!-- SKEW Y -->																																
														<td style="width:100px; padding-bottom:15px; ">
															<div id='caption-skewy-slider' class="rotationsliders" style="width:100px;"></div>
															<input class="css_edit_novice tpshortinput" name="skewy" type="text" value="0" />°
														</td>
	
													</tr>		
													
												</table>
												
												<table style="border-spacing:0px">							
													<!-- OPACITY -->												
	
													<tr class="css-edit-title">
														<td colspan="2" style="padding:10px"><?php _e("Opacity",REVSLIDER_TEXTDOMAIN)?></td>
														<td colspan="2" style="padding:10px;padding-left:20px"><?php _e("Perspective",REVSLIDER_TEXTDOMAIN)?></td>
														<td colspan="2" style="padding:10px;padding-left:20px"><?php _e("Origin",REVSLIDER_TEXTDOMAIN)?></td>
													</tr>
													
													<tr class="">																										
													<!-- OPACITY -->																								
														<td style="width:30px"></td>
														<td style="width:100px; padding-bottom:15px; ">
															<div id='caption-opacity-slider' class="rotationsliders"  style="width:100px !important;"></div>
															<input class="css_edit_novice tpshortinput" name="captionopacity" type="text" value="0" />%
														</td>
													<!-- PERSPECTIVE -->																									
														<td style="width:30px;"></td>
														<td style="width:100px; padding-bottom:15px; ">
															<div id='caption-perspective-slider' class="rotationsliders"  style="width:100px;"></div>
															<input class="css_edit_novice tpshortinput" name="captionperspective" type="text" value="0" />px
														</td>
													<!-- ORIGINX -->																									
														<td style="width:30px;"><?php _e("X:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="width:100px; padding-bottom:15px; ">
															<div id='caption-originx-slider' class="rotationsliders" style="width:100px;"></div>
															<input class="css_edit_novice tpshortinput" name="originx" type="text" value="0" />%
														</td>
													<!-- ORIGINY -->																																						
														<td style="width:30px"><?php _e("Y:",REVSLIDER_TEXTDOMAIN) ?></td>
														<td style="width:100px; padding-bottom:15px; ">
															<div id='caption-originy-slider' class="rotationsliders" style="width:100px;"></div>
															<input class="css_edit_novice tpshortinput" name="originy" type="text" value="0" />%
														</td>
	
													</tr>		
													
												</table>										
											</div>
										</div>																																
								</div>
																																
								<div id="dialog-change-layeranimation" title="Save Layer Animation" style="display:none;">
									<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 50px 0;"></span><?php
									_e('Overwrite the current selected Animation ',REVSLIDER_TEXTDOMAIN);
									echo '"<span id="current-layer-handle"></span>"';
									_e(' or save as a new Animation?',REVSLIDER_TEXTDOMAIN)?></p>
								</div>
								
								<div id="dialog-change-layeranimation-save-as" title="Save as" style="display:none;">
									<p>
										<?php _e('Save as Animation:',REVSLIDER_TEXTDOMAIN)?><br />
										<input type="text" name="layeranimation_save_as" value="" />
									</p>
								</div>
								<!-- END OF CUSTOM ANIMATION LAYER EDITOR -->


								<!-- THE ADVANCED LAYER PARAMETERS -->
								<div class='settings_wrapper'>
									<div class="postbox unite-postbox">
										<h3 class='no-accordion tp-accordion tpa-closed'><span class="postbox-arrow2">+</span>
											<span><?php _e("Layer Links & Advanced Params",REVSLIDER_TEXTDOMAIN)?> </span>
										</h3>
										<div class="toggled-content tp-closedatstart tp-closeifotheropen">

											<ul class="list_settings">
												<li class="custom attributes_title" style="">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("Links (optional)",REVSLIDER_TEXTDOMAIN)?></span>
													<hr>
												</li>
												<div class="layer-links">
													<?php
														$s = $settingsLayerOutput;
														$s->drawSettingsByNames("layer_image_link,layer_link_open_in,layer_slide_link,layer_scrolloffset");
													?>
												</div>

												<li id="" class="custom attributes_title" style="">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("Caption Sharp Corners (optional only with BG color)",REVSLIDER_TEXTDOMAIN)?></span>
													<hr>
												</li>
												<div class="layer-links">
													<?php
														$s = $settingsLayerOutput;
														$s->drawSettingsByNames("layer_cornerleft,layer_cornerright");
													?>
												</div>

												<li id="" class="custom attributes_title" style="">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("Advanced Responsive Settings",REVSLIDER_TEXTDOMAIN)?></span>
													<hr>
												</li>
												<div class="layer-links">
													<?php
														$s = $settingsLayerOutput;
														$s->drawSettingsByNames("layer_resizeme,layer_hidden");
													?>
												</div>


												<li id="custom_attributes" class="custom attributes_title" style="">
													<span class="setting_text_2 text-disabled" original-title=""><?php _e("Attributes (optional)",REVSLIDER_TEXTDOMAIN)?></span>
													<hr>
												</li>
												<?php
													$s = $settingsLayerOutput;
													$s->drawSettingsByNames("layer_id,layer_classes,layer_title,layer_rel");
												?>

											</ul>
											<div class="clear"></div>
										</div>
									</div>
								</div>

							</form>
						</div>

					<!----- End Left Layers Form ------>

						<div class="edit_layers_right">
							<div class="postbox unite-postbox layer_sortbox">
								<h3 class="no-accordion">
									<span><?php _e("Layers Timing & Sorting",REVSLIDER_TEXTDOMAIN)?></span>
									<div id="button_sort_visibility" title="Hide All Layers"></div>
									<div id="button_sort_time" class="ui-state-active ui-corner-all button_sorttype button-primary revgreen"><?php _e("By Time",REVSLIDER_TEXTDOMAIN) ?></div>
									<div id="button_sort_depth" class="ui-state-hover ui-corner-all button_sorttype button-primary revgreen"><?php _e("By Depth",REVSLIDER_TEXTDOMAIN)?></div>
								</h3>

								<div id="global_timeline" class="timeline">
									<div id="timeline_handle" class="timerdot"></div>
									<div id="layer_timeline" class="layertime"></div>
									<div class="mintime">0 ms</div>
									<div class="maxtime"><?php echo $slideDelay?> ms</div>
								</div>


								<div class="inside">
									<ul id="sortlist" class='sortlist'></ul>
								</div>
							</div>
						</div>

						<div class="clear"></div>

					</div>
				</div>


	<div id="dialog_insert_button" class="dialog_insert_button" title="Insert Button" style="display:none;">
		<p>
			<ul class="list-buttons">
			<?php foreach($arrButtonClasses as $class=>$text): ?>
					<li>
						<a href="javascript:UniteLayersRev.insertButton('<?php echo $class?>','<?php echo $text?>')" class="tp-button <?php echo $class?> small"><?php echo $text?></a>
					</li>
			<?php endforeach;?>
			</ul>
		</p>
	</div>

	<div id="dialog_template_insert" class="dialog_template_help" title="<?php _e("Template Insertions",REVSLIDER_TEXTDOMAIN) ?>" style="display:none;">
		<b><?php _e("Post Replace Placeholders:",REVSLIDER_TEXTDOMAIN) ?></b>
		<table class="table_template_help">
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('meta:somemegatag')">%meta:somemegatag%</a></td><td><?php _e("Any custom meta tag",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('title')">%title%</a></td><td><?php _e("Post Title",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('excerpt')">%excerpt%</a></td><td><?php _e("Post Excerpt",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('alias')">%alias%</a></td><td><?php _e("Post Alias",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('content')">%content%</a></td><td><?php _e("Post content",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('link')">%link%</a></td><td><?php _e("The link to the post",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('date')">%date%</a></td><td><?php _e("Date created",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('date_modified')">%date_modified%</a></td><td><?php _e("Date modified",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('author_name')">%author_name%</a></td><td><?php _e("Author name",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('num_comments')">%num_comments%</a></td><td><?php _e("Number of comments",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('catlist')">%catlist%</a></td><td><?php _e("List of categories with links",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('taglist')">%taglist%</a></td><td><?php _e("List of tags with links",REVSLIDER_TEXTDOMAIN) ?></td></tr>
		</table>
		<?php if(UniteEmRev::isEventsExists()):?>

		<br><br>

		<b><?php _e("Events Placeholders:",REVSLIDER_TEXTDOMAIN) ?></b>
		<table class="table_template_help">
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_start_date')">%event_start_date%</a></td><td><?php _e("Event start date",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_end_date)">'%event_end_date%</a></td><td><?php _e("Event end date",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_start_time')">%event_start_time%</a></td><td><?php _e("Event start time",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_end_time)">'%event_end_time%</a></td><td><?php _e("Event end time",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_event_id')">%event_event_id%</a></td><td><?php _e("Event ID",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_location_name')">%event_location_name%</a></td><td><?php _e("Event location name",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_location_slug%')">%event_location_slug%</a></td><td><?php _e("Event location slug",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_location_address)">%event_location_address%</a></td><td><?php _e("Event location address",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_location_town')">%event_location_town%</a></td><td><?php _e("Event location town",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_location_state')">%event_location_state%</a></td><td><?php _e("Event location state",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_location_postcode')">%event_location_postcode%</a></td><td><?php _e("Event location postcode",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_location_region')">%event_location_region%</a></td><td><?php _e("Event location region",REVSLIDER_TEXTDOMAIN) ?></td></tr>
			<tr><td><a href="javascript:UniteLayersRev.insertTemplate('event_location_country')">%event_location_country%</a></td><td><?php _e("Event location country",REVSLIDER_TEXTDOMAIN) ?></td></tr>
		</table>

		<?php endif?>
	</div>

	<!-- FIXED POSITIONED TOOLBOX -->
		<div class="" style="position:fixed;right:-10px;top:100px;z-index:100;">
			<a href="javascript:void(0)" id="button_preview_slide-tb" class="button-primary button-fixed revbluedark"  stlye="height: 40px !important;border-radius:5px 0px 0px 5px; -webkit-border-radius:5px 0px 0px 5px;-moz-border-radius:5px 0px 0px 5px; " title="Preview Slide"><div style="font-size:16px; padding:10px 5px;" class="revicon-search-1"></div></a>
		</div>
		
	<script type="text/javascript">

		jQuery(document).ready(function() {
			<?php if(!empty($jsonLayers)):?>
				//set init layers object
				UniteLayersRev.setInitLayersJson(<?php echo $jsonLayers?>);
			<?php endif?>

			<?php if(!empty($jsonCaptions)):?>
			UniteLayersRev.setInitCaptionClasses(<?php echo $jsonCaptions?>);
			<?php endif?>
			
			<?php if(!empty($arrCustomAnim)):?>
			UniteLayersRev.setInitLayerAnim(<?php echo $arrCustomAnim?>);
			<?php endif?>

			<?php if(!empty($jsonFontFamilys)):?>
			UniteLayersRev.setInitFontTypes(<?php echo $jsonFontFamilys?>);
			<?php endif?>

			<?php if(!empty($arrCssStyles)):?>
			UniteCssEditorRev.setInitCssStyles(<?php echo $arrCssStyles?>);
			<?php endif?>

			UniteCssEditorRev.setCssCaptionsUrl('<?php echo $urlCaptionsCSS?>');

			UniteLayersRev.init("<?php echo $slideDelay?>");
			UniteCssEditorRev.init();
			
			RevSliderAdmin.initGlobalStyles();
			
			RevSliderAdmin.setStaticCssCaptionsUrl('<?php echo GlobalsRevSlider::$urlStaticCaptionsCSS; ?>');

		});

	</script>
