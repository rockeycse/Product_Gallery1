<div class="col-md-12">
    <div class="form-group required col-md-12" id="form-product_name-error">
        {!! Form::label("product_name","product_name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("name",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="product_name-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-unitprice-error">
        {!! Form::label("unitprice","Unit Price",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("unitprice",null,["class"=>"form-control required","step"=>"any"]) !!}
            <span id="unitprice-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-12" id="form-description-error">
        {!! Form::label("description","Product description",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::textarea("description",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="description-error" class="help-block"></span>
        </div>
    </div>

</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('product/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary"])!!}
    </div>
</div>
<script>
    $("#frm").submit(function (event) {
        event.preventDefault();
        $('.loading').show();
        var form = $(this);
        var data = new FormData($(this)[0]);
        var url = form.attr("action");
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#frm input.required, #frm textarea.required').each(function () {
                        index = $(this).attr('product_name');
                        if (index in data.errors) {
                            $("#form-" + index + "-error").addClass("has-error");
                            $("#" + index + "-error").html(data.errors[index]);
                        }
                        else {
                            $("#form-" + index + "-error").removeClass("has-error");
                            $("#" + index + "-error").empty();
                        }
                    });
                    $('#focus').focus().select();
                } else {
                    $(".has-error").removeClass("has-error");
                    $(".help-block").empty();
                    $('.loading').hide();
                    ajaxLoad(data.url, data.content);
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
        return false;
    });
</script>