@extends('layouts.app', ['activePage' => 'employee', 'titlePage' => __('Employee')])

@section('content')
    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-12">


                    <div class="card ">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('View Employee') }}</h4>
                            <p class="card-category">{{ __('Employee information') }}</p>
                        </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('employee.create')}}" class="btn btn-sm btn-primary">Add new</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>
                                                    #SL
                                                </th>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Creation date
                                                </th>
                                                <th class="text-right">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if ($employees)

                                                @foreach ($employees as $key=>$employee)
                                                <tr>
                                                    <td>
                                                        {{++$key}}
                                                    </td>
                                                    <td>
                                                       {{$employee->name}}
                                                    </td>
                                                    <td>
                                                        {{$employee->description}}
                                                    </td>
                                                    <td>
                                                        {{ date('Y-m-d h:i a ', strtotime( $employee->updated_at))}}
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('employee.edit', $employee->id)}}"
                                                            data-original-title="" title="Edit">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a><br>
    
                                                        <a rel="tooltip" class="btn btn-dark btn-link" href="{{route('employee.show', $employee->id)}}"
                                                            data-original-title="" title="View">
                                                            <i class="material-icons">visibility</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
    
    
                                                        <form method="POST"  action="{{route('employee.destroy', $employee->id)}}">
                                                            @csrf
                                                            @method('delete')
    
                                                            <button onclick="return(confirm('Are you sure?'))" type="submit" title="Delete"  rel="tooltip" class="btn btn-danger btn-link"> <i class="material-icons">close</i>
                                                                <div class="ripple-container"></div></button>
    
                                                        </form>
    
    
                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                            @endif


                                          



                                        </tbody>
                                    </table>
                                </div>
                            </div>




                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
