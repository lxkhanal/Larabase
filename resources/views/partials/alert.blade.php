<div>
<?php
$SuccessMessage=session("message:success",null);
?>
@if($SuccessMessage)
<div class="alert alert-success">
    {{$SuccessMessage}}

</div>
@endif
</div>