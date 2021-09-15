@extends('layouts.app', ['activePage' => 'allDraftsList', 'titlePage' => __('All Draft List')])

@section('content')
    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-12">


                    <div class="card ">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('View All Drafts') }}</h4>
                            <p class="card-category">{{ __('Draft information') }}</p>
                        </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('sell.create')}}" class="btn btn-sm btn-primary">Create new</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>#SL</th>
                                                <th>Draft No</th>
                                                <th>Customer Name</th>
                                                <th>
                                                    Payable Amount
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

                                            @if ($drafts)

                                                @foreach ($drafts as $key=>$draft)
                                                <tr>
                                                    <td>
                                                        {{++$key}}
                                                    </td>
                                                    <td>
                                                        {{$draft->draft_no}}
                                                    </td>
                                                    <td>
                                                       {{$draft->name}}
                                                    </td>
                                                    <td>
                                                        {{$draft->total_order_cost}}
                                                    </td>
                                                    <td>
                                                        {{$draft->description}}
                                                    </td>
                                                    <td>
                                                        {{ date('Y-m-d h:i a ', strtotime( $draft->updated_at))}}

                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('draft.edit', $draft->id)}}"
                                                            data-original-title="" title="Edit">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a><br>

                                                        <a rel="tooltip" class="btn btn-dark btn-link" href="{{route('draft.show', $draft->id)}}"
                                                            data-original-title="" title="View">
                                                            <i class="material-icons">visibility</i>
                                                            <div class="ripple-container"></div>
                                                        </a>


                                                        <form method="POST"  action="{{route('draft.destroy', $draft->id)}}">
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
