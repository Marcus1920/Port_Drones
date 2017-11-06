<<<<<<< HEAD
<!-- Modal Default -->
<div class="modal fade modalEditPosition" id="modalPosition" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id='depTitle'>Position</h4>
            </div>
            <div class="modal-body">
            {!! Form::open(['url' => 'updatePosition', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"updatePositionForm" ]) !!}
            {!! Form::hidden('positionID',NULL,['id' => 'positionID']) !!}
            {!! Form::hidden('id',Auth::user()->id) !!}
            <div class="form-group">
                {!! Form::label('Name', 'Name', array('class' => 'col-md-2 control-label')) !!}
                <div class="col-md-10">
                  {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name']) !!}
                  @if ($errors->has('name')) <p class="help-block red">*{{ $errors->first('name') }}</p> @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" id='submitUpdatePositionForm' type="button" class="btn btn-sm">Save Changes</button>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
=======
<!-- Modal Default -->
<div class="modal fade modalEditPosition" id="modalPosition" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id='depTitle'>Position</h4>
            </div>
            <div class="modal-body">
            {!! Form::open(['url' => 'updatePosition', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"updatePositionForm" ]) !!}
            {!! Form::hidden('positionID',NULL,['id' => 'positionID']) !!}
            {!! Form::hidden('id',Auth::user()->id) !!}
            <div class="form-group">
                {!! Form::label('Name', 'Name', array('class' => 'col-md-2 control-label')) !!}
                <div class="col-md-10">
                  {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name']) !!}
                  @if ($errors->has('name')) <p class="help-block red">*{{ $errors->first('name') }}</p> @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" id='submitUpdatePositionForm' type="button" class="btn btn-sm">Save Changes</button>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
