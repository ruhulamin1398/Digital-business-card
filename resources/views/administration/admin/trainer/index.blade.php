@extends("administration.app")
@section("content")






<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Trainers</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total {{$trainers->count()}} Trainers</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <!-- <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>a</span></a></li>
                                                        <li><a href="#"><span>Closed</span></a></li>
                                                        <li><a href="#"><span>Onhold</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li> -->
                                        <li class="nk-block-tools-opt"><a href="{{route('trainers.create')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Trainer</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <table class="nk-tb-list nk-tb-ulist">
                                    <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="pid-all">
                                                    <label class="custom-control-label" for="pid-all"></label>
                                                </div>
                                            </th>
                                            <th class="nk-tb-col">trainer Name</th>
                                            <th class="nk-tb-col ">Total Venue</th>
                                            <th class="nk-tb-col ">Register Date</th>
                                            <th class="nk-tb-col ">Active/Inactive</th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right">
                                                <em class="icon ni ni-more-h"></em>

                                            </th>
                                        </tr><!-- .nk-tb-item -->
                                    </thead>
                                    <tbody>

                                        @foreach($trainers as $trainer)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="pid-01">
                                                    <label class="custom-control-label" for="pid-01"></label>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col">
                                                <a href="{{route('venues.index')}}?user_id={{$trainer->id}}" class="project-title">
                                                    @if($trainer->profile_photo_path)

                                                    <div class="user-avatar sq bg-purple"><img src="{{route('index')}}/{{$trainer->profile_photo_path}}" alt="" width="35px" height="35px"></div>
                                                    @else

                                                    <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                                    @endif
                                                    <div class="project-info ">
                                                        <h6 class="title"> {{$trainer->first_name}}  {{$trainer->last_name}} </h6>
                                                    </div>
                                                </a>
                                            </td>

                                            <td class="nk-tb-col ">
                                                <div>  <a href="{{route('venues.index')}}?user_id={{$trainer->id}}"> {{$trainer->venues->count()}} </a>    </div>
                                            </td>
                                            <td class="nk-tb-col ">
                                                <div> {{$trainer->created_at->format("D-M-Y")}} </div>
                                            </td>





                                            <td class="nk-tb-col   ">

                                                <div class="badge badge-dim badge-{{$trainer->status->classes}} "> {{$trainer->status->name}} </div>
                                            </td>
                                            <td class="nk-tb-col">


                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">


                                                                    <li><a href="{{route('trainers.edit',$trainer->id)}}"><em class="icon ni ni-edit"></em><span>Edit trainer</span></a></li>
                                                                    <li><a href="{{route('trainers.status',$trainer->id)}}"><em class="icon ni ni-edit"></em><span> @if($trainer->status->id==1) Deactive @else Active @endif  </span></a></li>  
                                                                    <li><a href="{{route('venues.index')}}?user_id={{$trainer->id}}"><em class="icon ni ni-eye"></em><span>Venues</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </td>
                                        </tr>

                                        @endforeach
                                        <!-- .nk-tb-item -->







                                    </tbody>
                                </table><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul><!-- .pagination -->
                                    </div>
                                    <div class="g">
                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div>
                                                <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                    <option value="page-1">1</option>
                                                    <option value="page-2">2</option>
                                                    <option value="page-4">4</option>
                                                    <option value="page-5">5</option>
                                                    <option value="page-6">6</option>
                                                    <option value="page-7">7</option>
                                                    <option value="page-8">8</option>
                                                    <option value="page-9">9</option>
                                                    <option value="page-10">10</option>
                                                    <option value="page-11">11</option>
                                                    <option value="page-12">12</option>
                                                    <option value="page-13">13</option>
                                                    <option value="page-14">14</option>
                                                    <option value="page-15">15</option>
                                                    <option value="page-16">16</option>
                                                    <option value="page-17">17</option>
                                                    <option value="page-18">18</option>
                                                    <option value="page-19">19</option>
                                                    <option value="page-20">20</option>
                                                </select>
                                            </div>
                                            <div>OF 102</div>
                                        </div>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>




@endsection