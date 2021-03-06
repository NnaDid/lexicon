 

<div class="col-md-12 mx-n5">
<table id="example" class="table table-striped table-bordered nowrap" >

        <thead>
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Usage</th>
            <th>Origin</th>
            <th>Other forms</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $user->getMyNames($_SESSION["NL_USER_LIVE"]); ?>     
        </tbody>
        <tfoot>
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Usage</th>
            <th>Origin</th>
            <th>Other forms</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "dom": '<"toolbar">frtip'
    } );
  
} );

</script>


	<!-- Modal -->
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body">
                    <div class="nameInfo">
                          <i class="fa fa-spinner fa-spin fa-3x"></i> 
                    </div>
				</div>  
                <div class="modal-footer">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button>
                </div>
			</div><!-- modal-content -->

		</div><!-- modal-dialog -->
	</div><!-- modal -->

<style>

	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;
	}
	
	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}

        
/*Right*/
	.modal.right.fade .modal-dialog {
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
		        transition: opacity 0.3s linear, right 0.3s ease-out;
	}
	
	.modal.right.fade.in .modal-dialog {
		right: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}

</style>