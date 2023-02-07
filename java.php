
			<script type="text/javascript">
    $(function(){
        var params = {
            // Request parameters
        };
      $("#donald").click(function(){
        <script type="text/javascript">
    $(function() {
        var params = {
            // Request parameters
        };
      alert("hello");
        $.ajax({
            url: "https://sandbox.momodeveloper.mtn.com/collection/v1_0/bc-authorize?" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Authorization","MDQ0NGMzYmYtNTM5ZC00ZTFjLTljMzQtY2RiMzRmNGZhNDYyOjA2OTcxZmU0NmFhNDQ0ZjdiNjQxZDE3Mjk2Mzc0NjY2");
                xhrObj.setRequestHeader("X-Target-Environment","sandbox");
                xhrObj.setRequestHeader("X-Callback-Url","");
                xhrObj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","{subscription key}");
            },
            type: "POST",
            // Request body
            data: "{body}",
        })
        .done(function(data) {
            alert("success");
        })
        .fail(function() {
            alert("error");
        });
    });
</script>
       
    
	});
    });