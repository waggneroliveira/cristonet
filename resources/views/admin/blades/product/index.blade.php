@extends('admin.core.admin')
@section('content')
<style>
    .btn-group.focus-btn-group{
        display: none;
    }
</style>
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('dashboard.title_dashboard')}}</a></li>
                                <li class="breadcrumb-item active">Produtos</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Produtos</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-12 d-flex justify-between">
                                    <div class="col-6">
                                        @if(Auth::user()->hasRole('Super') || Auth::user()->can('usuario.tornar usuario master') || Auth::user()->can(['produtos.visualizar', 'produtos.remover']))
                                            <button id="btSubmitDelete" data-route="{{route('admin.dashboard.product.destroySelected')}}" type="button" class="btSubmitDelete btn btn-danger" style="display: none;">{{__('dashboard.btn_delete_all')}}</button>
                                        @endif
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        @if (Auth::user()->hasPermissionTo('produtos.visualizar') &&
                                            Auth::user()->hasPermissionTo('produtos.criar') ||
                                            Auth::user()->hasPermissionTo('usuario.tornar usuario master') || 
                                            Auth::user()->hasRole('Super'))
                                                @if ($productSection == null)                                                
                                                    <button type="button" class="btn btn-primary text-black waves-effect waves-light me-2" data-bs-toggle="modal" data-bs-target="#productSection-create"><i class="mdi mdi-plus-circle me-1"></i> Info Sessão</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="productSection-create" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="plan modal-dialog modal-dialog-centered" style="max-width: 760px;">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-light">
                                                                    <h4 class="modal-title" id="myCenterModalLabel">{{__('dashboard.btn_create')}}</h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form action="{{route('admin.dashboard.productSection.store')}}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @include('admin.blades.productSection.form', ['textareaId' => 'textarea-create'])  
                                                                        <div class="d-flex justify-content-end gap-2">
                                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">{{__('dashboard.btn_cancel')}}</button>
                                                                            <button type="submit" class="btn btn-primary text-black waves-effect waves-light">{{__('dashboard.btn_create')}}</button>
                                                                        </div>                                                 
                                                                    </form>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->                                                
                                                @endif
                                        @endif

                                        @if (Auth::user()->hasPermissionTo('produtos.visualizar') &&
                                            Auth::user()->hasPermissionTo('produtos.editar') ||
                                            Auth::user()->hasPermissionTo('usuario.tornar usuario master') || 
                                            Auth::user()->hasRole('Super'))
                                                @if (isset($productSection))
                                                    <button data-bs-toggle="modal" data-bs-target="#productSection-edit-{{$productSection->id}}" class="tabledit-edit-button btn btn-primary text-black me-2"><span class="mdi mdi-pencil me-1"></span>Info Sessão</button>
                                                    <div class="modal fade" id="productSection-edit-{{$productSection->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="plan modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-light">
                                                                    <h4 class="modal-title" id="myCenterModalLabel">{{__('dashboard.btn_edit')}}</h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form action="{{ route('admin.dashboard.productSection.update', ['productSection' => $productSection->id]) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        @include('admin.blades.productSection.form', ['textareaId' => 'textarea-edit-' . $productSection->id])   
                                                                        <div class="d-flex justify-content-end gap-2">
                                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">{{__('dashboard.btn_cancel')}}</button>
                                                                            <button type="submit" class="btn btn-primary text-black waves-effect waves-light">{{__('dashboard.btn_save')}}</button>
                                                                        </div>                                                                                                                      
                                                                    </form>                                                                    
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                @endif
                                        @endif

                                        @if (Auth::user()->hasRole('Super') || Auth::user()->can('usuario.tornar usuario master') || Auth::user()->can(['produtos.visualizar', 'produtos.criar']))
                                            <button type="button" class="btn btn-primary text-black waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#product-create"><i class="mdi mdi-plus-circle me-1"></i> {{__('dashboard.btn_create')}}</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="product-create" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="product modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-light">
                                                            <h4 class="modal-title" id="myCenterModalLabel">{{__('dashboard.btn_create')}}</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <form action="{{route('admin.dashboard.product.store')}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @include('admin.blades.product.form', ['textareaId' => 'textarea-create'])  
                                                                <div class="d-flex justify-content-end gap-2">
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">{{__('dashboard.btn_cancel')}}</button>
                                                                    <button type="submit" class="btn btn-primary text-black waves-effect waves-light">{{__('dashboard.btn_create')}}</button>
                                                                </div>                                                 
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        @endif
                                    </div>
                                </div>
                            </div>
    
                            <div class="table-responsive">
                                <table class="table-sortable table table-centered table-nowrap table-striped" id="products-datatable">
                                    <thead>                                        
                                        <tr>
                                            <th></th>
                                            <th class="bs-checkbox">
                                                <label><input name="btnSelectAll" type="checkbox"></label>
                                            </th>
                                            <th>Título</th>
                                            <th>Ícone</th>
                                            <th>{{__('dashboard.created_at')}}</th>
                                            <th>{{__('dashboard.status')}}</th>
                                            <th style="width: 85px;">{{__('dashboard.action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody data-route="{{route('admin.dashboard.product.sorting')}}">
                                        @foreach($products as $key => $product)
                                            <tr data-code="{{$product->id}}">
                                                <td><span class="btnDrag mdi mdi-drag-horizontal font-22"></span></td>
                                                <td class="bs-checkbox">
                                                    <label><input data-index="{{$key}}" name="btnSelectItem" class="btnSelectItem" type="checkbox" value="{{$product->id}}"></label>
                                                </td>
                                                <td>
                                                   {!!isset($product->title)?$product->title:'-'!!}
                                                </td>
                                                <td class="table-product text-start">
                                                    @if ($product->path_image)
                                                        <img src="{{ asset('storage/'.$product->path_image) }}" alt="table-product" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                        @else      
                                                        <img src="{{asset('build/admin/images/products/product-3.jpg')}}" alt="table-product" class="me-2 rounded-circle">
                                                    @endif
                                                </td>                                               
                                                <td>
                                                    @php
                                                        $locales = [
                                                            'pt' => 'd/m/Y H:i:s',
                                                            'en' => 'Y-m-d H:i A',          
                                                            'es' => 'Y-m-d H:i A',          

                                                        ];
                                                        $locale = session()->get('locale');
                                                    @endphp
                                                        @if ($product && $product->created_at)
                                                            @if (array_key_exists($locale, $locales))
                                                                {{$product->created_at->format($locales[$locale])}}
                                                                @else
                                                                {{$product->created_at->format('d/m/Y H:i:s')}}
                                                            @endif
                                                            @else
                                                            -
                                                        @endif
                                                </td>
                                                <td>
                                                    @switch($product->active)
                                                        @case(0) <span class="badge bg-soft text-danger">{{__('dashboard.inactive')}}</span> @break
                                                        @case(1) <span class="badge bg-soft-success text-success">{{__('dashboard.active')}}</span>@break
                                                    @endswitch                                                    
                                                </td>
            
                                                <td class="d-flex gap-lg-1 justify-center" style="padding: 18px 15px 0px 0px;">
                                                    @if (Auth::user()->hasRole('Super') || Auth::user()->can('usuario.tornar usuario master') || Auth::user()->can(['produtos.visualizar', 'produtos.editar'])) 
                                                        <button data-bs-toggle="modal" data-bs-target="#product-edit-{{$product->id}}" class="tabledit-edit-button btn btn-primary text-black" style="padding: 2px 8px;width: 30px"><span class="mdi mdi-pencil"></span></button>
                                                        <div class="modal fade" id="product-edit-{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="product modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-light">
                                                                        <h4 class="modal-title" id="myCenterModalLabel">{{__('dashboard.btn_edit')}}</h4>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                                    </div>
                                                                    <div class="modal-body p-4">
                                                                        <form action="{{ route('admin.dashboard.product.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            @include('admin.blades.product.form', ['textareaId' => 'textarea-edit-product-' . $product->id])   
                                                                            <div class="d-flex justify-content-end gap-2">
                                                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">{{__('dashboard.btn_cancel')}}</button>
                                                                                <button type="submit" class="btn btn-primary text-black waves-effect waves-light">{{__('dashboard.btn_save')}}</button>
                                                                            </div>                                                                                                                      
                                                                        </form>                                                                    
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                    @endif
                                                    @if (Auth::user()->hasRole('Super') || Auth::user()->can('usuario.tornar usuario master') || Auth::user()->can(['produtos.visualizar', 'produtos.remover']))
                                                        <form action="{{route('admin.dashboard.product.destroy',['product' => $product->id])}}" style="width: 30px" method="POST">
                                                            @method('DELETE') @csrf        
                                                            
                                                            <button type="button" style="width: 30px"class="demo-delete-row btn btn-danger btn-xs btn-icon btSubmitDeleteItem"><i class="fa fa-times"></i></button>
                                                        </form>                                                    
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
@endsection
