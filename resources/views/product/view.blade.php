<div class="memberdetails">
    <h2 class="page-header">Product details</h2>
    <div class="col-md-12">
        <div class="form-group required col-md-12" id="form-unitprice-error">
            {!! Form::label("unitprice","Product Name",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                 {{$ProductDetails->name}}
                <span id="unitprice-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-12" id="form-unitprice-error">
            {!! Form::label("unitprice","Unit Price",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {{$ProductDetails->unitprice}}
                <span id="unitprice-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-12" id="form-unitprice-error">
            {!! Form::label("unitprice","Product Description",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                 {{$ProductDetails->description}}
                <span id="unitprice-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-push-4">
            <a href="javascript:ajaxLoad('product/list')" class="btn btn-danger"><i
                        class="glyphicon glyphicon-backward"></i>
                Back</a>
        </div>
    </div>
</div>
