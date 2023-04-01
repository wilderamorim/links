const uebi = {
  init: function (options) {
    //
  },

  incrementLinkClickCount: function (linkName) {
    $.post('counts.php', { linkName }, function (response) {
        // console.log(response);
      }, 'json');
  },
};
