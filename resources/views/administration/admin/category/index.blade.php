@extends("administration.app")

@section("content")


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">

            <div class="nk-content-body">



                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Categories</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total {{$categories->count()}} category</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">





                                        <form action="{{route('categories.store')}}" method="post">
                                            @csrf
                                            <li class="nk-block-tools-opt mr-3">
                                                <input type="text" name="title" placeholder="Category Name" class="form-control " required>
                                            </li>
                                            <li class="nk-block-tools-opt"><button class="btn btn-primary" type="submit"><em class="icon ni ni-plus"></em><span>Add category</span></button></li>
                                        </form>

                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->


                <div class="nk-msg">
                    <div class="nk-msg-aside">


                        <div class="nk-msg-list" data-simplebar>
                            @foreach($categories as $category)
                            @if( $category->parent==9999)
                            <div class="nk-msg-item   @if ($loop->first) current firstcategory @else othercategory @endif" id="profile{{$category->id}}" data-category_id="{{$category->id}}">


                                <div class="nk-msg-info">
                                <div class="nk-msg-from">
                                                        <div class="nk-msg-sender">
                                                            <div class="name">{{$category->title}}</div>
                                                            <!-- <div class="lable-tag dot bg-pink"></div> -->
                                                        </div>
                                                        <div class="nk-msg-meta">
                                                            <div class="attchment"><em class="icon ni ni-edit mr-2 "></em></div>

                                                            <form method="POST" action="{{route('categories.destroy',$category->id)}}" id="categoryDeleteForm-{{$category->id}}">
                                @csrf
                                @method("DELETE")

                                <div type="submit" class="attchment" onclick="  if (confirm('Do you want to Delete?')) { document.getElementById('categoryDeleteForm-{{$category->id}}').submit();      return true;} else { return false; } " ><em class="icon ni ni-trash "></em></div>
                               
                            </form>
                                                            
                                                            
                                                        </div>
                                                    </div>
{{--
                                    <div class="nk-msg-context">
                                        <div class="nk-msg-text">
                                            <h6 class="title">{{$category->title}} </h6>

                                        </div>


                                    </div>
                                    --}}                                   
                                </div>
                            </div><!-- .nk-msg-item -->
                            @endif
                            @endforeach

                        </div><!-- .nk-msg-list -->
                    </div><!-- .nk-msg-aside -->
                    <div class="nk-msg-body bg-white " id="accordionExample">



                        <div id="categoryDetails" class=" show ">

                            <div class="nk-msg-head">

                                <h4 class="title d-none d-lg-inline" id="categoryNamae"> </h4>
                            </div>





                            <div class="row">



                                <div class="col-12 col-md-6">
                                    <div class="nk-reply-item">
                                        <ul class="list-group list-group-flush">
                                            <button type="button" class="list-group-item list-group-item-action active font-weight-bold">
                                                Sub categories
                                            </button>
                                            <div id="subcategoriesList"></div>


                                        </ul>
                                    </div>
                                </div>




                                <div class="col-12 col-md-6">
                                    <div class="nk-reply-item">


                                        <h6 class="title">New Sub Category </h6>
                                        <hr>
                                        <form action="{{route('subcategories.store')}}" method="post">
                                            @csrf



                                            <div class="form-group">
                                                <label class="form-label text-center" for="full-name-1">Title </label>


                                                <div class="form-control-wrap">
                                                    <input type="text" name="title" class="form-control" id="full-name-1" required>
                                                </div>
                                            </div>

                                            <input type="text" name="parent" id="FormCategoryId" hidden>
                                            <div class="form-group">

                                                <div class="form-control-wrap">
                                                    <button class="btn btn-primary form-control" type="submit"><span>Add Sub category</span></button>
                                                </div>
                                            </div>




                                        </form>



                                    </div>
                                </div>




                            </div><!-- .nk-msg-body -->
                        </div><!-- .nk-msg -->
                    </div>
                </div>
            </div>
        </div>

        @endsection


        @section('js')

        <script>
            var category;
            var category_id;
            var categories = @json($categories);
            $(".nk-msg-item").on("click", function() {

                $(".current").removeClass('current');
                $(this).addClass('current');
                category_id = $(".current").data('category_id');
                $.each(categories, function(i) {
                    // console.log(i)
                    if (categories[i].id == category_id) {
                        category = categories[i];
                    }

                });
                console.log(category)

                var url = "{{route('subcategories.index')}}?category_id=" + category_id;
                ht = "";
                $("#subcategoriesList").html(ht);
                $("#categoryNamae").text(category.title);
                $("#FormCategoryId").val(category.id);
                


                $.get(url, function(data) {
                    $.each(data, function(i) {
                        ht += '<li class="list-group-item">' + data[i].title + '</li>'
                        $("#subcategoriesList").html(ht);
                    })

                    console.log(data)
                });



            });


            $(".current").trigger('click');
        </script>
        @endsection