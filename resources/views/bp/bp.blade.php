@extends('layouts.app')


@section('content')

<body>
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#purchaseModal">Purchase</button>

    <div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="purchaseLabel">Purchase</h4>
                </div>
                <div class="modal-body">
                    sup?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Purchase</button>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
