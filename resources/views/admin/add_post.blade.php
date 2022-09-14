@extends('admin_layout')
@section('admin_content')
  <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right">  </i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Post</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Post</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<p class="alert-success">
						<?php
							$message = Session::get('message');
							if($message){
								echo $message;
								Session::put('message', null);
							}
						?>
					</p>

					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-post')}}" method="post">
	
              {{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Post Title</label>
							  <div class="controls">
								<input type="text" class="input x-large" name="post_title">
							  </div>
							</div>
              <div class="control-group">
							  <label class="control-label" for="date01">Post Subtitle</label>
							  <div class="controls">
								<input type="text" class="input x-large" name="post_subtitle">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Post Intro</label>
							  <div class="controls">
								<textarea type="text" class="input x-large" name="post_intro"></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Post Body</label>
							  <div class="controls">
								<textarea type="text" class="input x-large" name="post_details" id="editor"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Post</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   
					</div>
				</div><!--/span-->
				
			</div><!--/row-->
@endsection