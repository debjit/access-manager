@extends('admin.header_footer')
@section('admin_container')
	<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Policy Schemas
                            {{link_to_route('schema.add.form', 'New Policy Schema', NULL, ['class'=>'btn btn-primary navbar-right',])}}
                    </h2>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <table class="table table-striped table-responsive table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Schema Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($schemas))
                            <?php $i = $schemas->getFrom(); ?>
                                @foreach($schemas as $schema)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$schema->name}}</td>
                                <td>{{$schema->description}}</td>
                                <td>
                                    {{Form::actions(
                                        route('schema.edit.form',$schema->id),
                                        route('schema.delete',$schema->id)
                                        )}}
                                </td>
                        </tr>
                        <? $i++; ?>
                        @endforeach
                        @else
                        <tr>
                            <td colspan='4'>
                            {{"No Records Found"}}
                                
                            </td>
                        </tr>
                        @endif
                        
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg12 col-md-12 col-sm-12">
                    {{$schemas->links()}}
                </div>
            </div>

        <!-- </div> -->
@stop