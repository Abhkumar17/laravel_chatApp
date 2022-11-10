<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>
<span data-href="/admin/tasks" id="export" class="btn btn-success btn-sm" onclick="exportTasks(event.target);">Export</span>
<script>
   function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>
</body>
</html>