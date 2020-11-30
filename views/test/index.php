<h1>is test</h1>

<div class="container">
	
	
<div class="fos_btn_container text-center">		
	<button id="fos_btn_9" onclick="$('#fos_modal_dialog_3').modal()" type="button" class="btn btn-primary">Отправить</button>
</div>	
	
<p><a class="btn btn-success signup" data-userid="22" >Записаться на занятия</a></p>
<!-- Modal "Записаться на занятия" -->
<div class="modal fade" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
     <div class="modal-content">
       <div class="modal-body">
         ...
       </div>
     </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->	

<hr>
<div id="fos_modal_dialog_3" class="modal fade" tabindex="-1" role="dialog">  
<div class="modal-dialog">
	<div class="modal-content">
		<!--
		<div class="modal-header">
			<div class="col-sm-11 fos_title">вы можете себе представить!</div>
			<div class="col-sm-1" data-dismiss="modal" id="ref_close_fos"><h2>X</h2></div>                
		</div>
		-->
		<div class="modal-body">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<div id="success"> </div> <!-- For success message -->	
		<form id="w2" action="/" method="post">
			<input type="hidden" name="_csrf" value="RGE0bTZlT1MBBk4DBSgrGA00DSMbDHgKcVYMOwMxBQMMVXcZGw4/Og==">	
			<input type="hidden" name="сhcode" value="gjnjkjrlkzDfc">						
			<input type="hidden" name="subj" value="фос  &quot;Почему ипотечное кредитование выгодно&quot;">						
			<input type="hidden" name="subj" value="amin@mail.com">						
			<div class="form-group">Ваше имя:	<input type="text" name="name" value="" size="50" placeholder=""></div>	
			<div class="form-group">телефон:	<input type="text" name="phone" value="" size="50" placeholder=""></div>	
			<div class="form-group">e-mail:		<input type="email" name="email" value="" size="50" placeholder=""></div>	
			<div class="form-group">коментарий:	<textarea name="comment" cols="50"></textarea></div>	
			<div class="form-group">
				<button type="submit" class="btn btn-primary">отправить запрос</button>				
			</div>
		</form>                 
		</div>    
		<div class="modal-footer"></div>
	</div>	
</div>
</div>
	
</div>

