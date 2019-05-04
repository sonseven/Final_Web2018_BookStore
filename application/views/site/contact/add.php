
<div class="box-center"><!-- The box-center product-->
             <div><h2>Liên Hệ</h2>
		      </div>
		      <div class="box-content-center product"><!-- The box-content-center -->
		            <form class="t-form form_action" method="post" action="<?php echo site_url('contact/add')?>" enctype="multipart/form-data">
                          
                          <div class="form-row">
        						<label for="param_name" class="form-label">Họ và tên:<span class="req">*</span></label>
        						<div class="form-item">
        							<input type="text" class="input" id="name" content="name" value="<?php echo set_value('name')?>">
        							<div class="clear"></div>
        							<div class="error" id="name_error"><?php echo form_error('name')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
        						<label for="param_email" class="form-label">Email:<span class="req">*</span></label>
        						<div class="form-item">
        							<input type="email" class="input" id="email" content="email">
        							<div class="clear"></div>
        							<div class="error" id="email_error"><?php echo form_error('email')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
        						<label for="param_phone" class="form-label">Số điện thoại:<span class="req">*</span></label>
        						<div class="form-item">
        							<input type="text" class="input" id="phone" content="phone">
        							<div class="clear"></div>
        							<div class="error" id="phone_error"><?php echo form_error('phone')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  <div class="form-row">
        						<label for="param_address" class="form-label">Địa chỉ:<span class="req">*</span></label>
        						<div class="form-item">
        							<input type="text" class="input" id="address" content="address" value="<?php echo set_value('address')?>">
        							<div class="clear"></div>
        							<div class="error" id="content_error"><?php echo form_error('address')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  <div class="form-row">
        						<label for="param_title" class="form-label">Tiêu đề liên hệ:<span class="req">*</span></label>
        						<div class="form-item">
        							<input type="text" class="input" id="title" content="title" value="<?php echo set_value('title')?>">
        							<div class="clear"></div>
        							<div class="error" id="title_error"><?php echo form_error('title')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
        						<label for="param_content" class="form-label">Nội dung liên hệ:<span class="req">*</span></label>
        						<div class="form-item">
        							<textarea class="input" id="content" content="content"><?php echo set_value('content')?></textarea>
        							<div class="clear"></div>
        							<div class="error" id="content_error"><?php echo form_error('content')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
        						<label class="form-label">&nbsp;</label>
        						<div class="form-item">
        				           	<input type="submit" class="button" value="Liên Hệ" name="submit">
        						</div>
        				   </div>
                    </form>
		            <div class="clear"></div>
		      </div><!-- End box-content-center -->
		   
</div>
