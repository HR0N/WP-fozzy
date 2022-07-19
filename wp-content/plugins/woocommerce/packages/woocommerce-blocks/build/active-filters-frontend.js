!function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=222)}({0:function(e,t){e.exports=window.wp.element},1:function(e,t){e.exports=window.wp.i18n},101:function(e,t,r){"use strict";r.d(t,"a",(function(){return o})),r.d(t,"b",(function(){return c}));var n=r(6);const o=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:()=>{},r=arguments.length>2?arguments[2]:void 0,o=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"";const c=e.filter(e=>e.attribute===r.taxonomy),s=c.length?c[0]:null;if(!(s&&s.slug&&Array.isArray(s.slug)&&s.slug.includes(o)))return;const a=s.slug.filter(e=>e!==o),l=e.filter(e=>e.attribute!==r.taxonomy);a.length>0&&(s.slug=a.sort(),l.push(s)),t(Object(n.sortBy)(l,"attribute"))},c=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:()=>{},r=arguments.length>2?arguments[2]:void 0,o=arguments.length>3&&void 0!==arguments[3]?arguments[3]:[],c=arguments.length>4&&void 0!==arguments[4]?arguments[4]:"in";const s=e.filter(e=>e.attribute!==r.taxonomy);return 0===o.length?t(s):(s.push({attribute:r.taxonomy,operator:c,slug:o.map(e=>{let{slug:t}=e;return t}).sort()}),t(Object(n.sortBy)(s,"attribute"))),s}},105:function(e,t,r){"use strict";var n=r(0);t.a=function(e){let{icon:t,size:r=24,...o}=e;return Object(n.cloneElement)(t,{width:r,height:r,...o})}},11:function(e,t){function r(){return e.exports=r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},e.exports.__esModule=!0,e.exports.default=e.exports,r.apply(this,arguments)}e.exports=r,e.exports.__esModule=!0,e.exports.default=e.exports},110:function(e,t,r){"use strict";r.d(t,"a",(function(){return c})),r.d(t,"b",(function(){return s}));var n=r(2);const o=Object(n.getSetting)("attributes",[]).reduce((e,t)=>{const r=(n=t)&&n.attribute_name?{id:parseInt(n.attribute_id,10),name:n.attribute_name,taxonomy:"pa_"+n.attribute_name,label:n.attribute_label}:null;var n;return r.id&&e.push(r),e},[]),c=e=>{if(e)return o.find(t=>t.id===e)},s=e=>{if(e)return o.find(t=>t.taxonomy===e)}},119:function(e,t,r){"use strict";r.d(t,"a",(function(){return n}));const n=e=>"boolean"==typeof e},12:function(e,t){e.exports=window.wp.isShallowEqual},122:function(e,t){},14:function(e,t){e.exports=window.wp.url},15:function(e,t){e.exports=window.wp.primitives},16:function(e,t,r){"use strict";var n=r(19),o=r.n(n),c=r(0),s=r(3),a=r(1),l=r(44),i=e=>{let{imageUrl:t=l.l+"/block-error.svg",header:r=Object(a.__)("Oops!","woocommerce"),text:n=Object(a.__)("There was an error loading the content.","woocommerce"),errorMessage:o,errorMessagePrefix:s=Object(a.__)("Error:","woocommerce"),button:i,showErrorBlock:u=!0}=e;return u?Object(c.createElement)("div",{className:"wc-block-error wc-block-components-error"},t&&Object(c.createElement)("img",{className:"wc-block-error__image wc-block-components-error__image",src:t,alt:""}),Object(c.createElement)("div",{className:"wc-block-error__content wc-block-components-error__content"},r&&Object(c.createElement)("p",{className:"wc-block-error__header wc-block-components-error__header"},r),n&&Object(c.createElement)("p",{className:"wc-block-error__text wc-block-components-error__text"},n),o&&Object(c.createElement)("p",{className:"wc-block-error__message wc-block-components-error__message"},s?s+" ":"",o),i&&Object(c.createElement)("p",{className:"wc-block-error__button wc-block-components-error__button"},i))):null};r(33);class u extends s.Component{constructor(){super(...arguments),o()(this,"state",{errorMessage:"",hasError:!1})}static getDerivedStateFromError(e){return void 0!==e.statusText&&void 0!==e.status?{errorMessage:Object(c.createElement)(c.Fragment,null,Object(c.createElement)("strong",null,e.status),": ",e.statusText),hasError:!0}:{errorMessage:e.message,hasError:!0}}render(){const{header:e,imageUrl:t,showErrorMessage:r=!0,showErrorBlock:n=!0,text:o,errorMessagePrefix:s,renderError:a,button:l}=this.props,{errorMessage:u,hasError:b}=this.state;return b?"function"==typeof a?a({errorMessage:u}):Object(c.createElement)(i,{showErrorBlock:n,errorMessage:r?u:null,header:e,imageUrl:t,text:o,errorMessagePrefix:s,button:l}):this.props.children}}t.a=u},18:function(e,t){e.exports=window.wp.htmlEntities},19:function(e,t){e.exports=function(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e},e.exports.__esModule=!0,e.exports.default=e.exports},196:function(e,t,r){"use strict";var n=r(0),o=r(15);const c=Object(n.createElement)(o.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(n.createElement)(o.Path,{d:"M12 13.06l3.712 3.713 1.061-1.06L13.061 12l3.712-3.712-1.06-1.06L12 10.938 8.288 7.227l-1.061 1.06L10.939 12l-3.712 3.712 1.06 1.061L12 13.061z"}));t.a=c},2:function(e,t){e.exports=window.wc.wcSettings},200:function(e,t,r){"use strict";var n=r(11),o=r.n(n),c=r(0),s=r(4),a=r.n(s),l=r(1),i=r(105),u=r(196);r(122);var b=e=>{let{text:t,screenReaderText:r="",element:n="li",className:s="",radius:l="small",children:i=null,...u}=e;const b=n,p=a()(s,"wc-block-components-chip","wc-block-components-chip--radius-"+l),d=Boolean(r&&r!==t);return Object(c.createElement)(b,o()({className:p},u),Object(c.createElement)("span",{"aria-hidden":d,className:"wc-block-components-chip__text"},t),d&&Object(c.createElement)("span",{className:"screen-reader-text"},r),i)};t.a=e=>{let{ariaLabel:t="",className:r="",disabled:n=!1,onRemove:s=(()=>{}),removeOnAnyClick:p=!1,text:d,screenReaderText:f="",...m}=e;const g=p?"span":"button";if(!t){const e=f&&"string"==typeof f?f:d;t="string"!=typeof e?
/* translators: Remove chip. */
Object(l.__)("Remove","woocommerce"):Object(l.sprintf)(
/* translators: %s text of the chip to remove. */
Object(l.__)('Remove "%s"',"woocommerce"),e)}const O={"aria-label":t,disabled:n,onClick:s,onKeyDown:e=>{"Backspace"!==e.key&&"Delete"!==e.key||s()}},j=p?O:{},_=p?{"aria-hidden":!0}:O;return Object(c.createElement)(b,o()({},m,j,{className:a()(r,"is-removable"),element:p?"button":m.element,screenReaderText:f,text:d}),Object(c.createElement)(g,o()({className:"wc-block-components-chip__remove"},_),Object(c.createElement)(i.a,{className:"wc-block-components-chip__remove-icon",icon:u.a,size:16})))}},22:function(e,t,r){"use strict";var n=r(0),o=r(4),c=r.n(o);t.a=e=>{let t,{label:r,screenReaderLabel:o,wrapperElement:s,wrapperProps:a={}}=e;const l=null!=r,i=null!=o;return!l&&i?(t=s||"span",a={...a,className:c()(a.className,"screen-reader-text")},Object(n.createElement)(t,a,o)):(t=s||n.Fragment,l&&i&&r!==o?Object(n.createElement)(t,a,Object(n.createElement)("span",{"aria-hidden":"true"},r),Object(n.createElement)("span",{className:"screen-reader-text"},o)):Object(n.createElement)(t,a,r))}},222:function(e,t,r){e.exports=r(243)},223:function(e,t){},23:function(e,t,r){"use strict";r.d(t,"a",(function(){return c}));var n=r(0);const o=Object(n.createContext)("page"),c=()=>Object(n.useContext)(o);o.Provider},243:function(e,t,r){"use strict";r.r(t);var n=r(48),o=r(0),c=r(1),s=r(35),a=r(2),l=r(4),i=r.n(l),u=r(22),b=r(119),p=r(98),d=(r(223),r(110)),f=r(37),m=r(200),g=r(14);const O=(e,t)=>Number.isFinite(e)&&Number.isFinite(t)?Object(c.sprintf)(
/* translators: %1$s min price, %2$s max price */
Object(c.__)("Between %1$s and %2$s","woocommerce"),Object(f.formatPrice)(e),Object(f.formatPrice)(t)):Number.isFinite(e)?Object(c.sprintf)(
/* translators: %s min price */
Object(c.__)("From %s","woocommerce"),Object(f.formatPrice)(e)):Object(c.sprintf)(
/* translators: %s max price */
Object(c.__)("Up to %s","woocommerce"),Object(f.formatPrice)(t)),j=e=>{let{type:t,name:r,prefix:n="",removeCallback:s=(()=>{}),showLabel:a=!0,displayStyle:l}=e;const i=n?Object(o.createElement)(o.Fragment,null,n," ",r):r,b=Object(c.sprintf)(
/* translators: %s attribute value used in the filter. For example: yellow, green, small, large. */
Object(c.__)("Remove %s filter","woocommerce"),r);return Object(o.createElement)("li",{className:"wc-block-active-filters__list-item",key:t+":"+r},a&&Object(o.createElement)("span",{className:"wc-block-active-filters__list-item-type"},t+": "),"chips"===l?Object(o.createElement)(m.a,{element:"span",text:i,onRemove:s,radius:"large",ariaLabel:b}):Object(o.createElement)("span",{className:"wc-block-active-filters__list-item-name"},i,Object(o.createElement)("button",{className:"wc-block-active-filters__list-item-remove",onClick:s},Object(o.createElement)("svg",{width:"16",height:"16",viewBox:"0 0 16 16",fill:"none",xmlns:"http://www.w3.org/2000/svg"},Object(o.createElement)("ellipse",{cx:"8",cy:"8",rx:"8",ry:"8",transform:"rotate(-180 8 8)",fill:"currentColor",fillOpacity:"0.7"}),Object(o.createElement)("rect",{x:"10.636",y:"3.94983",width:"2",height:"9.9466",transform:"rotate(45 10.636 3.94983)",fill:"white"}),Object(o.createElement)("rect",{x:"12.0503",y:"11.0209",width:"2",height:"9.9466",transform:"rotate(135 12.0503 11.0209)",fill:"white"})),Object(o.createElement)(u.a,{screenReaderLabel:b}))))},_=function(){const e=window.location.href,t=Object(g.getQueryArgs)(e),r=Object(g.removeQueryArgs)(e,...Object.keys(t));for(var n=arguments.length,o=new Array(n),c=0;c<n;c++)o[c]=arguments[c];o.forEach(e=>{if("string"==typeof e)return delete t[e];if("object"==typeof e){const r=Object.keys(e)[0],n=t[r].split(",");t[r]=n.filter(t=>t!==e[r]).join(",")}});const s=Object.fromEntries(Object.entries(t).filter(e=>{let[,t]=e;return t}));window.location.href=Object(g.addQueryArgs)(r,s)};var y=r(62),w=r(18),h=r(101),E=e=>{let{attributeObject:t={},slugs:r=[],operator:n="in",displayStyle:l}=e;const{results:i,isLoading:u}=Object(y.a)({namespace:"/wc/store/v1",resourceName:"products/attributes/terms",resourceValues:[t.id]}),[p,d]=Object(s.b)("attributes",[]);if(u)return null;const f=t.label,m=Object(a.getSettingWithCoercion)("is_rendering_php_template",!1,b.a);return Object(o.createElement)("li",null,Object(o.createElement)("span",{className:"wc-block-active-filters__list-item-type"},f,":"),Object(o.createElement)("ul",null,r.map((e,r)=>{const s=i.find(t=>t.slug===e);if(!s)return null;let a="";return r>0&&"and"===n&&(a=Object(o.createElement)("span",{className:"wc-block-active-filters__list-item-operator"},Object(c.__)("and","woocommerce"))),j({type:f,name:Object(w.decodeEntities)(s.name||e),prefix:a,removeCallback:()=>{if(m)return 1===p.find(e=>{let{attribute:r}=e;return r==="pa_"+t.name}).slug.length?_("query_type_"+t.name,"filter_"+t.name):_({["filter_"+t.name]:e});Object(h.a)(p,d,t,e)},showLabel:!1,displayStyle:l})})))};Object(n.a)({selector:".wp-block-woocommerce-active-filters",Block:e=>{let{attributes:t,isEditor:r=!1}=e;const n=Object(a.getSettingWithCoercion)("is_rendering_php_template",!1,b.a),[l,f]=Object(s.b)("attributes",[]),[m,y]=Object(s.b)("stock_status",[]),[w,h]=Object(s.b)("min_price"),[v,k]=Object(s.b)("max_price"),S=Object(a.getSetting)("stockStatusOptions",[]),x=Object(o.useMemo)(()=>{if(m.length>0)return m.map(e=>j({type:Object(c.__)("Stock Status","woocommerce"),name:S[e],removeCallback:()=>{if(n)return _({filter_stock_status:e});const t=m.filter(t=>t!==e);y(t)},displayStyle:t.displayStyle}))},[S,m,y,t.displayStyle,n]),P=Object(o.useMemo)(()=>Number.isFinite(w)||Number.isFinite(v)?j({type:Object(c.__)("Price","woocommerce"),name:O(w,v),removeCallback:()=>{if(n)return _("max_price","min_price");h(void 0),k(void 0)},displayStyle:t.displayStyle}):null,[w,v,t.displayStyle,h,k,n]),N=Object(o.useMemo)(()=>l.map(e=>{const r=Object(d.b)(e.attribute);return Object(o.createElement)(E,{attributeObject:r,displayStyle:t.displayStyle,slugs:e.slug,key:e.attribute,operator:e.operator})}),[l,t.displayStyle]),[R,A]=Object(s.b)("ratings");Object(o.useEffect)(()=>{var e;if(!n)return;if(R.length&&R.length>0)return;const t=null===(e=Object(p.c)("rating_filter"))||void 0===e?void 0:e.toString();t&&A(t.split(","))},[n,R,A]);const T=Object(o.useMemo)(()=>{if(R.length>0)return R.map(e=>j({type:Object(c.__)("Rating","woocommerce"),name:Object(c.sprintf)(
/* translators: %s is referring to the average rating value */
Object(c.__)("Rated %s out of 5","woocommerce"),e),removeCallback:()=>{if(n)return _({rating_filter:e});const t=R.filter(t=>t!==e);A(t)},displayStyle:t.displayStyle}))},[R,A,t.displayStyle,n]);if(!(l.length>0||m.length>0||R.length>0||Number.isFinite(w)||Number.isFinite(v)||r))return null;const C="h"+t.headingLevel;if(!Object(a.getSettingWithCoercion)("has_filterable_products",!1,b.a))return null;const B=i()("wc-block-active-filters__list",{"wc-block-active-filters__list--chips":"chips"===t.displayStyle});return Object(o.createElement)(o.Fragment,null,!r&&t.heading&&Object(o.createElement)(C,{className:"wc-block-active-filters__title"},t.heading),Object(o.createElement)("div",{className:"wc-block-active-filters"},Object(o.createElement)("ul",{className:B},r?Object(o.createElement)(o.Fragment,null,j({type:Object(c.__)("Size","woocommerce"),name:Object(c.__)("Small","woocommerce"),displayStyle:t.displayStyle}),j({type:Object(c.__)("Color","woocommerce"),name:Object(c.__)("Blue","woocommerce"),displayStyle:t.displayStyle})):Object(o.createElement)(o.Fragment,null,P,x,N,T)),Object(o.createElement)("button",{className:"wc-block-active-filters__clear-all",onClick:()=>{if(n)return(()=>{const e=window.location.href,t=Object(g.getQueryArgs)(e),r=Object(g.removeQueryArgs)(e,...Object.keys(t)),n=Object.fromEntries(Object.keys(t).filter(e=>!(e.includes("min_price")||e.includes("max_price")||e.includes("rating_filter")||e.includes("filter_")||e.includes("query_type_"))).map(e=>[e,t[e]]));window.location.href=Object(g.addQueryArgs)(r,n)})();h(void 0),k(void 0),f([]),y([])}},Object(o.createElement)(u.a,{label:Object(c.__)("Clear All","woocommerce"),screenReaderLabel:Object(c.__)("Clear All Filters","woocommerce")}))))},getProps:e=>({attributes:{displayStyle:e.dataset.displayStyle,heading:e.dataset.heading,headingLevel:e.dataset.headingLevel||3},isEditor:!1})})},3:function(e,t){e.exports=window.React},30:function(e,t,r){"use strict";r.d(t,"a",(function(){return s}));var n=r(0),o=r(12),c=r.n(o);function s(e){const t=Object(n.useRef)(e);return c()(e,t.current)||(t.current=e),t.current}},33:function(e,t){},35:function(e,t,r){"use strict";r.d(t,"a",(function(){return b})),r.d(t,"b",(function(){return p})),r.d(t,"c",(function(){return d}));var n=r(5),o=r(7),c=r(0),s=r(12),a=r.n(s),l=r(30),i=r(58),u=r(23);const b=e=>{const t=Object(u.a)();e=e||t;const r=Object(o.useSelect)(t=>t(n.QUERY_STATE_STORE_KEY).getValueForQueryContext(e,void 0),[e]),{setValueForQueryContext:s}=Object(o.useDispatch)(n.QUERY_STATE_STORE_KEY);return[r,Object(c.useCallback)(t=>{s(e,t)},[e,s])]},p=(e,t,r)=>{const s=Object(u.a)();r=r||s;const a=Object(o.useSelect)(o=>o(n.QUERY_STATE_STORE_KEY).getValueForQueryKey(r,e,t),[r,e]),{setQueryValue:l}=Object(o.useDispatch)(n.QUERY_STATE_STORE_KEY);return[a,Object(c.useCallback)(t=>{l(r,e,t)},[r,e,l])]},d=(e,t)=>{const r=Object(u.a)();t=t||r;const[n,o]=b(t),s=Object(l.a)(n),p=Object(l.a)(e),d=Object(i.a)(p),f=Object(c.useRef)(!1);return Object(c.useEffect)(()=>{a()(d,p)||(o(Object.assign({},s,p)),f.current=!0)},[s,p,d,o]),f.current?[n,o]:[e,o]}},37:function(e,t){e.exports=window.wc.priceFormat},4:function(e,t,r){var n;!function(){"use strict";var r={}.hasOwnProperty;function o(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var c=typeof n;if("string"===c||"number"===c)e.push(n);else if(Array.isArray(n)){if(n.length){var s=o.apply(null,n);s&&e.push(s)}}else if("object"===c)if(n.toString===Object.prototype.toString)for(var a in n)r.call(n,a)&&n[a]&&e.push(a);else e.push(n.toString())}}return e.join(" ")}e.exports?(o.default=o,e.exports=o):void 0===(n=function(){return o}.apply(t,[]))||(e.exports=n)}()},44:function(e,t,r){"use strict";r.d(t,"n",(function(){return c})),r.d(t,"l",(function(){return s})),r.d(t,"k",(function(){return a})),r.d(t,"m",(function(){return l})),r.d(t,"i",(function(){return i})),r.d(t,"d",(function(){return u})),r.d(t,"f",(function(){return b})),r.d(t,"j",(function(){return p})),r.d(t,"c",(function(){return d})),r.d(t,"e",(function(){return f})),r.d(t,"g",(function(){return m})),r.d(t,"a",(function(){return g})),r.d(t,"h",(function(){return O})),r.d(t,"b",(function(){return j}));var n,o=r(2);const c=Object(o.getSetting)("wcBlocksConfig",{buildPhase:1,pluginUrl:"",productCount:0,defaultAvatar:"",restApiRoutes:{},wordCountType:"words"}),s=c.pluginUrl+"images/",a=c.pluginUrl+"build/",l=c.buildPhase,i=null===(n=o.STORE_PAGES.shop)||void 0===n?void 0:n.permalink,u=(o.STORE_PAGES.checkout.id,o.STORE_PAGES.checkout.permalink),b=o.STORE_PAGES.privacy.permalink,p=(o.STORE_PAGES.privacy.title,o.STORE_PAGES.terms.permalink),d=(o.STORE_PAGES.terms.title,o.STORE_PAGES.cart.id,o.STORE_PAGES.cart.permalink),f=o.STORE_PAGES.myaccount.permalink?o.STORE_PAGES.myaccount.permalink:Object(o.getSetting)("wpLoginUrl","/wp-login.php"),m=Object(o.getSetting)("shippingCountries",{}),g=Object(o.getSetting)("allowedCountries",{}),O=Object(o.getSetting)("shippingStates",{}),j=Object(o.getSetting)("allowedStates",{})},48:function(e,t,r){"use strict";r.d(t,"a",(function(){return i}));var n=r(11),o=r.n(n),c=r(0),s=r(16);const a=[".wp-block-woocommerce-cart"],l=e=>{let{Block:t,containers:r,getProps:n=(()=>({})),getErrorBoundaryProps:a=(()=>({}))}=e;0!==r.length&&Array.prototype.forEach.call(r,(e,r)=>{const l=n(e,r),i=a(e,r),u={...e.dataset,...l.attributes||{}};(e=>{let{Block:t,container:r,attributes:n={},props:a={},errorBoundaryProps:l={}}=e;Object(c.render)(Object(c.createElement)(s.a,l,Object(c.createElement)(c.Suspense,{fallback:Object(c.createElement)("div",{className:"wc-block-placeholder"})},t&&Object(c.createElement)(t,o()({},a,{attributes:n})))),r,()=>{r.classList&&r.classList.remove("is-loading")})})({Block:t,container:e,props:l,attributes:u,errorBoundaryProps:i})})},i=e=>{const t=document.body.querySelectorAll(a.join(",")),{Block:r,getProps:n,getErrorBoundaryProps:o,selector:c}=e;(e=>{let{Block:t,getProps:r,getErrorBoundaryProps:n,selector:o,wrappers:c}=e;const s=document.body.querySelectorAll(o);c&&c.length>0&&Array.prototype.filter.call(s,e=>!((e,t)=>Array.prototype.some.call(t,t=>t.contains(e)&&!t.isSameNode(e)))(e,c)),l({Block:t,containers:s,getProps:r,getErrorBoundaryProps:n})})({Block:r,getProps:n,getErrorBoundaryProps:o,selector:c,wrappers:t}),Array.prototype.forEach.call(t,t=>{t.addEventListener("wc-blocks_render_blocks_frontend",()=>{(e=>{let{Block:t,getProps:r,getErrorBoundaryProps:n,selector:o,wrapper:c}=e;const s=c.querySelectorAll(o);l({Block:t,containers:s,getProps:r,getErrorBoundaryProps:n})})({...e,wrapper:t})})})}},5:function(e,t){e.exports=window.wc.wcBlocksData},58:function(e,t,r){"use strict";r.d(t,"a",(function(){return o}));var n=r(3);function o(e,t){const r=Object(n.useRef)();return Object(n.useEffect)(()=>{r.current===e||t&&!t(e,r.current)||(r.current=e)},[e,t]),r.current}},6:function(e,t){e.exports=window.lodash},62:function(e,t,r){"use strict";r.d(t,"a",(function(){return l}));var n=r(5),o=r(7),c=r(0),s=r(30),a=r(72);const l=e=>{const{namespace:t,resourceName:r,resourceValues:l=[],query:i={},shouldSelect:u=!0}=e;if(!t||!r)throw new Error("The options object must have valid values for the namespace and the resource properties.");const b=Object(c.useRef)({results:[],isLoading:!0}),p=Object(s.a)(i),d=Object(s.a)(l),f=Object(a.a)(),m=Object(o.useSelect)(e=>{if(!u)return null;const o=e(n.COLLECTIONS_STORE_KEY),c=[t,r,p,d],s=o.getCollectionError(...c);if(s){if(!(s instanceof Error))throw new Error("TypeError: `error` object is not an instance of Error constructor");f(s)}return{results:o.getCollection(...c),isLoading:!o.hasFinishedResolution("getCollection",c)}},[t,r,d,p,u]);return null!==m&&(b.current=m),b.current}},7:function(e,t){e.exports=window.wp.data},72:function(e,t,r){"use strict";r.d(t,"a",(function(){return o}));var n=r(0);const o=()=>{const[,e]=Object(n.useState)();return Object(n.useCallback)(t=>{e(()=>{throw t})},[])}},98:function(e,t,r){"use strict";r.d(t,"b",(function(){return o})),r.d(t,"a",(function(){return c})),r.d(t,"c",(function(){return s}));var n=r(14);const o="query_type_",c="filter_";function s(e){return window?Object(n.getQueryArg)(window.location.href,e):null}}});