(window.webpackJsonp=window.webpackJsonp||[]).push([[10],{706:function(t,e,o){var content=o(774);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,o(21).default)("72edd642",content,!0,{sourceMap:!1})},773:function(t,e,o){"use strict";o(706)},774:function(t,e,o){var n=o(20)(!1);n.push([t.i,".booked-movie[data-v-1d83306c]{background:#373737;box-shadow:inset 0 0 20px 3px #000;border:2px solid #fff;padding:20px 60px}",""]),t.exports=n},821:function(t,e,o){"use strict";o.r(e);var n=o(680),r=o(471),c=o(679),d=(o(32),o(9),o(7),o(10),o(13),o(8),o(14),o(2)),l=(o(4),o(33),o(34),o(143),o(119));function v(object,t){var e=Object.keys(object);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(object);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(object,t).enumerable}))),e.push.apply(e,o)}return e}function m(t){for(var i=1;i<arguments.length;i++){var source=null!=arguments[i]?arguments[i]:{};i%2?v(Object(source),!0).forEach((function(e){Object(d.a)(t,e,source[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(source)):v(Object(source)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(source,e))}))}return t}var f={name:"ThankYouModal",components:{BaseModal:function(){return o.e(4).then(o.bind(null,819))},BaseButton:function(){return o.e(0).then(o.bind(null,822))}},data:function(){return{bookedMovieId:61}},computed:m(m({},Object(l.c)({movieList:"movies/getAllMovies",bookMovies:"movies/getBookedMovies",options:"modal/getModalOption"})),{},{bookedMovieItem:function(){var t=this;return this.movieList.find((function(e){return e.id===t.options.id}))},bookedMovieInfo:function(){var t=this;return this.bookMovies.find((function(e){return+e.movie_id==+t.options.id}))}}),methods:m(m({},Object(l.b)({hideModal:"modal/hideModal"})),{},{goTo:function(link){this.$router.push(link),this.hideModal()}})},_=(o(773),o(41)),component=Object(_.a)(f,(function(){var t=this,e=t._self._c;return e("div",[e("BaseModal",{attrs:{"bg-img":"./img/modal-background-subscribe.png"}},[e("div",{staticClass:"flex-space-between-column"},[e("h2",{staticClass:"text-uppercase main-brown-text mb-10",class:t.getFontSize(t.$breakpoints.width,700,[32,32,32,32,32])},[t._v("Successful booking")]),t._v(" "),e(c.a,{staticClass:"booked-movie"},[e(n.a,{attrs:{md:"6"}},[e(r.a,{staticClass:"mb-5",attrs:{"lazy-src":t.$img(t.bookedMovieItem.image,{quality:20,format:"webp"}),src:t.$img(t.bookedMovieItem.image,{quality:100,format:"webp"}),contain:"","max-height":"300"}})],1),t._v(" "),e(n.a,{staticClass:"d-flex flex-column justify-center",attrs:{md:"6"}},[e("div",{staticClass:"mb-3"},[e("span",{staticClass:"text-uppercase main-brown-text"},[t._v("Movie name:")]),t._v("\n            "+t._s(t.bookedMovieItem.name)+"\n          ")]),t._v(" "),e("div",{staticClass:"mb-3"},[e("span",{staticClass:"text-uppercase main-brown-text"},[t._v("BOOKING TIME:")]),t._v("\n            "+t._s(t.bookedMovieInfo.showdate)+" at "+t._s(t.bookedMovieInfo.daytime)+"\n          ")]),t._v(" "),e("div",{staticClass:"mb-3 text-uppercase"},[e("span",{staticClass:"main-brown-text"},[t._v("Your row:")]),t._v(" "+t._s(t.bookedMovieInfo.row))]),t._v(" "),e("div",{staticClass:"mb-3 text-uppercase"},[e("span",{staticClass:"main-brown-text"},[t._v("Your seat:")]),t._v(" "+t._s(t.bookedMovieInfo.seat))]),t._v(" "),e("div",{staticClass:"mb-10"},[e("span",{staticClass:"text-uppercase main-brown-text"},[t._v("Your ticketkey:")]),t._v("\n            "+t._s(t.bookedMovieInfo.ticketkey)+"\n          ")]),t._v(" "),e("BaseButton",{attrs:{"button-color":"border","button-size":"large"},on:{click:function(e){return t.goTo("/my_movies")}}},[t._v("SEE ALL BOOKING")])],1)],1)],1)])],1)}),[],!1,null,"1d83306c",null);e.default=component.exports}}]);