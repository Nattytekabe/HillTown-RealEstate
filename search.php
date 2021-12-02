
<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form role="form" name="search" id="search" method="post" action="" enctype="multipart/form-data">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" value="submit" class="btn btn-sm btn-color">Search</button>
    </form>
</div>
<script type="text/javascript">
    
$(document).ready(function(){
$('#search').on('submit',function(){
$('#result').php('submitted');
  });
});

</script>