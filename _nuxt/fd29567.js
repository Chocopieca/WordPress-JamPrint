(window.webpackJsonp=window.webpackJsonp||[]).push([[16],{824:function(t,e,n){"use strict";n.r(e);var o=n(471),r=(n(32),{name:"BaseCarousel",props:{itemList:{type:Array,default:function(){return[{id:1,title:"Item1",content:"Content1",img:"https://www.learningcontainer.com/sample-image-files-download-for-testing/"},{id:2,title:"Item2",content:"Content2",img:"https://www.learningcontainer.com/sample-image-files-download-for-testing/"},{id:3,title:"Item3",content:"Content3",img:"https://www.learningcontainer.com/sample-image-files-download-for-testing/"}]}}},data:function(){return{setting:{centerMode:!0,autoplay:!0,centerPadding:"20px",fade:!0,focusOnSelect:!0,infinite:!0,arrows:!1,slidesToShow:this.$vuetify.breakpoint.mdAndUp?2:1,slidesToScroll:this.$vuetify.breakpoint.mdAndUp?2:1,slidesPerRow:this.$vuetify.breakpoint.mdAndUp?2:1,speed:500}}}}),l=n(41),component=Object(l.a)(r,(function(){var t=this,e=t._self._c;return e("VueSlickCarousel",t._b({directives:[{name:"show",rawName:"v-show",value:t.$vuetify.breakpoint.mdAndDown,expression:"$vuetify.breakpoint.mdAndDown"}]},"VueSlickCarousel",t.setting,!1),t._l(t.itemList,(function(n){return e("div",{key:n.id},[e(o.a,{attrs:{"lazy-src":t.$img(n.img,{quality:20,format:"webp"}),src:t.$img(n.img,{quality:100,format:"webp"}),contain:"","max-width":"356","max-height":"306","content-class":"main-white-text position-relative"}},[e("div",{staticClass:"team-block-item-content"},[e("div",{staticClass:"d-flex justify-space-between mb-2"},[e("div",{class:t.getFontSize(t.$breakpoints.width,700,[16,16,16,16,16])},[t._v(t._s(n.name))]),t._v(" "),e("a",{attrs:{href:n.twitter}},[e(o.a,{attrs:{src:"https://www.pngkey.com/maxpic/u2a9o0i1w7t4t4u2/","max-width":"23","max-height":"23"}})],1)]),t._v(" "),e("div",{class:t.getFontSize(t.$breakpoints.width,400,[14,14,14,14,14])},[t._v(t._s(n.content))])])])],1)})),0)}),[],!1,null,"3960edde",null);e.default=component.exports}}]);