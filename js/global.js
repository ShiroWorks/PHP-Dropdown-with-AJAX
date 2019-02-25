$('#user-select').on('change', function() {
  let self = $(this);

  $.ajax({
    url: 'http://localhost:8888/partials/user.php',
    type: 'GET',
    data: { user: self.val() },
    success: function(data) {
      $('#user-profile').html(data);
    }
  });
});
