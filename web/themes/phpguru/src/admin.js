import "jquery";
import "materialize-css/dist/js/materialize.min";
import "./admin.scss";
console.log(jQuery().jquery);
$(function () {
  M.AutoInit();
  // open sidenav
  const sideNavInstance = M.Sidenav.getInstance($(".sidenav"));
  sideNavInstance.open();

  // collapsible
  const collapsibleOptions = {
    onOpenStart: function (ele) {
      console.log(ele);
      $(ele).attr("aria-expanded", true);
    },
    onCloseStart: function (ele) {
      console.log(ele);
      $(ele).attr("aria-expanded", false);
    },
  };
  $(".collapsible").collapsible(collapsibleOptions);
});
