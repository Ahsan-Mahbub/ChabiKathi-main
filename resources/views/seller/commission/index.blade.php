@extends('seller.layouts.app')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title text-center"><b>Commission List Table</b></h3>
    </div>
    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">S/L</th>
                        <th class="text-center"> Commission(%)</th>
                        <th class="text-center"> Categories Name</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl = 1; @endphp
                    @foreach($commissions as $commission)
                    <tr>
                        <td class="text-center">{{$sl++}}</td>
                        <td class="text-center">{{$commission->commission}}</td>
                        <td class="text-center">{{$commission->category? $commission->category->category_name : 'Null'}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
