@extends('layouts.app')

@section('template_title')
    Unit Sale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Unit Sale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('unit-sales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Product Id</th>
										<th>Amountproduct</th>
										<th>Priceproduct</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unitSales as $unitSale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $unitSale->product_id }}</td>
											<td>{{ $unitSale->amountProduct }}</td>
											<td>{{ $unitSale->priceProduct }}</td>

                                            <td>
                                                <form action="{{ route('unit-sales.destroy',$unitSale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('unit-sales.show',$unitSale->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('unit-sales.edit',$unitSale->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $unitSales->links() !!}
            </div>
        </div>
    </div>
@endsection
