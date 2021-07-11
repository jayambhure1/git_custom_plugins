jQuery(document).ready(function () {
  initializeMailboxGlobelCalls.init();
});

var initializeMailboxGlobelCalls = (function () {
  var msg_for_plugin = function () {
    console.log("this msg come from jayambhure1 plugin ");
  };

  return {
    init: function () {
      msg_for_plugin();
    },
  };
})();
