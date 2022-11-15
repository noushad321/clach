(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["module-tracking-layer"],{

/***/ "./cartridges/app_accelerator_core/cartridge/client/default/js/modules/module.tracking-layer.js":
/*!******************************************************************************************************!*\
  !*** ./cartridges/app_accelerator_core/cartridge/client/default/js/modules/module.tracking-layer.js ***!
  \******************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return TrackingLayer; });\n/* harmony import */ var es6_promise_promise__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! es6-promise-promise */ \"./node_modules/es6-promise-promise/index.js\");\n/* harmony import */ var es6_promise_promise__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(es6_promise_promise__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var scrollmonitor__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! scrollmonitor */ \"./node_modules/scrollmonitor/scrollMonitor.js\");\n/* harmony import */ var scrollmonitor__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(scrollmonitor__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _helpers_utilities__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../helpers/utilities */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/helpers/utilities.js\");\n/* harmony import */ var _helpers_urlUtilities__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../helpers/urlUtilities */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/helpers/urlUtilities.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @borngroup/born-utilities */ \"./node_modules/@borngroup/born-utilities/dist/born-utilities.min.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_4__);\nfunction _typeof(obj) { \"@babel/helpers - typeof\"; if (typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; }; } return _typeof(obj); }\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\n\n\n\n\n\nvar DATA_LAYER = 'dataLayer',\n    DEBUG_MODE = false,\n    ENTER_VIEWPORT_GROUP = {};\n/**\n * Sets up event tracking on specific element. Uses the 'data-tracking' attribute to determine what to track.\n */\n\nvar TrackingLayer = /*#__PURE__*/function () {\n  function TrackingLayer() {\n    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};\n\n    _classCallCheck(this, TrackingLayer);\n\n    _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_4__[\"callbackOnElements\"].call(this, '[data-tracking-position]', this.setPosition);\n    _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_4__[\"callbackOnElements\"].call(this, options.elements, this.setElement);\n  }\n\n  _createClass(TrackingLayer, [{\n    key: \"setPosition\",\n    value: function setPosition(el, index) {\n      el.setAttribute('data-tracking-position', index + 1);\n    }\n    /**\n     * Sets up individual elements that have the data-tracking property\n     * @param {[type]} el [description]\n     */\n\n  }, {\n    key: \"setElement\",\n    value: function setElement(el) {\n      //If a 'data-tracking' is present, then those properties will  be used instead.\n      var options = el.getAttribute('data-tracking') ? JSON.parse(el.getAttribute('data-tracking')) : {};\n      el.trackingLayer = {};\n\n      if (Array.isArray(options)) {\n        options.forEach(this.setHandler.bind(this, el));\n      } else {\n        this.setHandler(el, options);\n      }\n    }\n    /**\n     * Adds a tracking handler to the passed element\n     * @param {[Object]} options:\n     *        el: [Node]\n     *        events: [String] Event to listen to.\n     *        trackEvent: [String] Name of the data layer object on which this event will be tracked.\n     *        trackObject: [Object] Key value pairs to be reported back to the tracking layer.\n     *        trackHandler: [String] Optional. Handler for the event.\n     */\n\n  }, {\n    key: \"setHandler\",\n    value: function setHandler(el, options) {\n      var handler = this.eventTracking,\n          eventList = options.events;\n\n      if (!eventList) {\n        if (el.nodeName === 'INPUT' || el.nodeName === 'SELECT' || el.nodeName === 'TEXTAREA') {\n          eventList = 'change';\n        } else {\n          eventList = 'click';\n        }\n      }\n\n      eventList = eventList.trim().split(/(?:,| )+/); //Attach a listener for each passed event.\n\n      eventList.forEach(function (currentEvent) {\n        if (currentEvent === 'pageload') {\n          //If `DATA_LAYER` is available, run immediately, otherwise wait until resources are loaded.\n          if (window[DATA_LAYER]) {\n            handler.call(this, el, options);\n          } else {\n            window.addEventListener('load', handler.bind(this, el, options));\n          }\n        } else if (currentEvent === 'iframeclick') {\n          //Very hacky way to track a click on an iframe.\n          //Checks if when on window blur the target is an iframe that matches either the tracked element or the delegated element.\n          window.addEventListener('blur', function () {\n            //Forces browsers to run this immediately instead of deferring it.\n            window.setTimeout(function () {\n              if (document.activeElement instanceof HTMLIFrameElement && (document.activeElement === el || options.delegate && document.activeElement.matches(options.delegate))) {\n                handler.call(this, el, options);\n              }\n            }.bind(this), 0);\n          }.bind(this));\n        } else if (currentEvent === 'enterViewport') {\n          scrollmonitor__WEBPACK_IMPORTED_MODULE_1___default.a.create(el, -200).one(currentEvent, function () {\n            if (options.enterViewportGroup) {\n              this.getInViewportItems(el, options, options.enterViewportGroup);\n            } else {\n              handler.call(this, el, options);\n            }\n          }.bind(this));\n        } else {\n          //Run delegated event from the body to allow for DOM insertions to also work.\n          if (options.delegate) {\n            document.body.addEventListener(currentEvent, function (evt) {\n              if (evt.target.matches(options.delegate)) {\n                handler.call(this, evt.target, options);\n              }\n            }.bind(this));\n          } else {\n            el.addEventListener(currentEvent, handler.bind(this, el, options));\n          }\n        }\n      }.bind(this));\n      el.removeAttribute('data-tracking');\n    }\n    /**\n     * Generates an array with related \"in viewport\" items that need to be pushed together whenever they enter the viewport.\n     * A slight timeout is added to allow JS to collect however many items are now in view when the user stops scrolling.\n     */\n\n  }, {\n    key: \"getInViewportItems\",\n    value: function getInViewportItems(el, options, groupID) {\n      window.clearTimeout(this.enterViewportTimeout);\n      ENTER_VIEWPORT_GROUP[groupID] = ENTER_VIEWPORT_GROUP[groupID] || [];\n      ENTER_VIEWPORT_GROUP[groupID].push(el);\n      this.enterViewportTimeout = window.setTimeout(function () {\n        options.childrenNodeList = ENTER_VIEWPORT_GROUP[groupID];\n        this.eventTracking(el, options); //Clear the current group after tracking data has been processed.\n\n        ENTER_VIEWPORT_GROUP[groupID] = [];\n      }.bind(this), 100);\n    }\n    /**\n     * Determines what to push as the value for a given property name.\n     * First checks for properties, attributes, and Resources then, if all fails, returns the string\n     */\n\n  }, {\n    key: \"getPropertyValue\",\n    value: function getPropertyValue(el, propertyReference, options) {\n      //Grab a specific context based on the closest element.\n      if (propertyReference === '--context') {\n        var matchingContext = el.closest('[data-tracking-context]');\n\n        if (matchingContext) {\n          return matchingContext.getAttribute('data-tracking-context');\n        }\n      } else if (propertyReference.indexOf('--context-') !== -1) {\n        var contextType = propertyReference.replace('--context-', ''),\n            _matchingContext = el.closest(\"[data-\".concat(contextType, \"]\"));\n\n        if (_matchingContext) {\n          return _matchingContext.getAttribute(\"data-\".concat(contextType));\n        }\n      } else if (propertyReference === '--childrenData') {\n        var childrenDataArray = [],\n            childrenNodeList = options.childrenNodeList || el.querySelectorAll('[data-tracking-id]');\n        [].forEach.call(childrenNodeList, function (currentEl) {\n          //Attempt to find a child element with the right attributes, otherwise default to the current element.\n          currentEl = currentEl.querySelector('[data-content-component], [data-product-tile]') || currentEl;\n\n          if (currentEl.hasAttribute('data-content-component')) {\n            childrenDataArray.push({\n              promoName: currentEl.getAttribute('data-tracking-id'),\n              promoPosition: currentEl.getAttribute('data-tracking-position')\n            });\n          } else if (currentEl.hasAttribute('data-product-tile')) {\n            childrenDataArray.push({\n              pid: currentEl.getAttribute('data-tracking-id'),\n              pos: currentEl.getAttribute('data-tracking-position')\n            });\n          }\n        });\n\n        if (childrenDataArray.length) {\n          return childrenDataArray;\n        }\n      } else if (propertyReference === '--content') {\n        return el.textContent.trim();\n      } else if (propertyReference === '--dropdownDisplayValue') {\n        return el.selectedOptions[0].textContent.trim();\n      }\n\n      return el[propertyReference] || el.getAttribute(propertyReference) || window.SFRA.Resources[propertyReference] || propertyReference;\n    }\n    /**\n     * Loops through the properties defined in trackObject and gets their real values by calling getPropertyValue;\n     * @param  {[HTMLElement]} el         [description]\n     * @param  {[Object]} trackObject [description]\n     * @return {[Object]}            [description]\n     */\n\n  }, {\n    key: \"getTrackObject\",\n    value: function getTrackObject(el, sourceObject, options) {\n      var trackObject = {};\n\n      if (_typeof(sourceObject) === 'object') {\n        for (var key in sourceObject) {\n          trackObject[key] = this.getPropertyValue(el, sourceObject[key], options);\n        }\n      }\n\n      return trackObject;\n    }\n    /**\n     * Default tracking method. Just pushes back a report value to the Data Layer\n     * @param  {[String | Boolean]} options.trackObject [property, attribute, or string to report]\n     * @param  {[String]} options.trackProperty  [Data Layer variable to report to]\n     * @param  {[String]} options.trackEvent [Name of the layer object to attach the variable to. ex: \"interactions\", \"event\", etc.]\n     */\n\n  }, {\n    key: \"eventTracking\",\n    value: function eventTracking(el, options, evt) {\n      //The \"data-disable-redirect\" attribute can be set on an anchor element.\n      //This attribute goes along functionalities like modal triggers, which should not redirect the user.\n      //Use `evt.target.getAttribute('href')` instead of `evt.target.href` to avoid incorrectly processing an SVG target.\n      var hrefURL = evt && evt.target && evt.target.getAttribute('href') && !evt.target.hasAttribute('data-disable-redirect') ? evt.target.getAttribute('href') : null,\n          hrefTarget = evt && evt.target && evt.target.getAttribute('target'),\n          trackObject = this.getTrackObject(el, options.trackObject, options),\n          retrieveAsyncData = options.asyncParams || options.asyncURL,\n          manualRedirect = hrefURL && !evt.metaKey && retrieveAsyncData; //Stops anchor clicks within a given data-tracking container if it should retrireve server data.\n\n      if (manualRedirect) {\n        evt.preventDefault();\n      } //Set the appropriate properties in the `trackObject`, which is later used to request server data.\n\n\n      if (retrieveAsyncData) {\n        trackObject.asyncURL = options.asyncURL || window.SFRA.Urls.GTMEventView;\n        trackObject.asyncParams = this.getTrackObject(el, options.asyncParams, options);\n      }\n\n      if (trackObject && trackObject.asyncParams && options.trackEvent === 'eePromoView') {\n        // check if the promo name is null\n        var promotions = trackObject.asyncParams.promotions;\n\n        if (promotions && Array.isArray(promotions) && promotions.length > 0) {\n          promotions = promotions.filter(function (promo) {\n            return promo.promoName !== 'null';\n          });\n        }\n\n        if (!promotions || promotions.length === 0 || !Array.isArray(promotions)) {\n          return null;\n        }\n\n        trackObject.asyncParams.promotions = promotions;\n      }\n\n      if (options.update) {\n        TrackingLayer.updateData(options.update, trackObject);\n      } else {\n        TrackingLayer.pushData(options.trackEvent, trackObject, options.trackMethod).then(function () {\n          //After server data has been retrieved, redirect the user to the target anchor's URL.\n          if (manualRedirect) {\n            if (hrefTarget === '_blank') {\n              window.open(hrefURL, '_blank', 'noopener,noreferrer');\n            } else {\n              window.location = hrefURL;\n            }\n          }\n        });\n      }\n    }\n    /**\n     * Loops through a list of URLs to load additional data for the data-layer.\n     * @param  {[type]} trackObject [description]\n     * @param  {[type]} index       [description]\n     * @return {[type]}             [description]\n     */\n\n  }], [{\n    key: \"getAsyncObject\",\n    value: function getAsyncObject(trackEvent, trackObject, index) {\n      var currentIndex = index || 0,\n          isArray = Array.isArray(trackObject.asyncURL),\n          asyncURL = isArray ? trackObject.asyncURL[currentIndex] : trackObject.asyncURL;\n      asyncURL = TrackingLayer.setAsyncURLParams(trackEvent, trackObject, asyncURL);\n      return es6_promise_promise__WEBPACK_IMPORTED_MODULE_0___default.a.resolve($.get(asyncURL)).then(function (response) {\n        Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_4__[\"objectAssign\"])(response, trackObject);\n        currentIndex++;\n\n        if (isArray && trackObject.asyncURL[currentIndex]) {\n          return TrackingLayer.getAsyncObject(trackEvent, response, currentIndex);\n        } else {\n          delete response.asyncURL;\n          delete response.asyncParams;\n        }\n\n        return response;\n      });\n    }\n    /**\n     * Triggers tracking for `elements` with the \"action.done\" event.\n     * @param  {[HTMLElement]} el\n     */\n\n  }, {\n    key: \"triggerEvent\",\n    value: function triggerEvent(elements) {\n      Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_4__[\"callbackOnElements\"])(elements, function (currentEl) {\n        Object(_helpers_utilities__WEBPACK_IMPORTED_MODULE_2__[\"publishEvent\"])('actiondone', false, currentEl);\n      });\n    }\n    /**\n     * Attaches necessary URL parameters for the backend to return the desired tracking data from the current event.\n     */\n\n  }, {\n    key: \"setAsyncURLParams\",\n    value: function setAsyncURLParams(trackEvent, trackObject, url) {\n      var pageData = Object(_helpers_utilities__WEBPACK_IMPORTED_MODULE_2__[\"getPageActionData\"])() || {};\n      return Object(_helpers_urlUtilities__WEBPACK_IMPORTED_MODULE_3__[\"appendParamsToURL\"])(url, {\n        eventType: trackObject.event || trackEvent,\n        reqPath: trackObject.reqPath || pageData.action,\n        qString: trackObject.qString || pageData.queryString || window.location.search.substring(1),\n        eventParams: trackObject.asyncParams ? JSON.stringify(trackObject.asyncParams) : ''\n      });\n    }\n  }, {\n    key: \"updateData\",\n    value: function updateData(targetObject, trackObject, trackMethod) {\n      if (window[DATA_LAYER] && window[targetObject]) {\n        Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_4__[\"objectAssign\"])(window[targetObject], trackObject);\n        trackMethod = trackMethod && window[DATA_LAYER][trackMethod] ? trackMethod : 'view';\n\n        if (window[DATA_LAYER][trackMethod]) {\n          window[DATA_LAYER][trackMethod](window[targetObject]);\n        }\n\n        if (DEBUG_MODE) {\n          console.log(trackObject);\n        }\n      }\n    }\n  }, {\n    key: \"pushData\",\n    value: function pushData(trackEvent, trackObject) {\n      var trackMethodName = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 'push';\n\n      if (!window[DATA_LAYER] || !trackEvent) {\n        return $.Deferred().resolve({}).promise();\n      }\n\n      if (_typeof(trackObject) === 'object' && (trackObject.asyncURL || trackObject.asyncParams)) {\n        trackObject.asyncURL = trackObject.asyncURL || window.SFRA.Urls.GTMEventView;\n        return TrackingLayer.getAsyncObject(trackEvent, trackObject).then(function (response) {\n          return TrackingLayer.runTrackingMethod(trackEvent, response, trackMethodName);\n        });\n      }\n\n      return TrackingLayer.runTrackingMethod(trackEvent, trackObject, trackMethodName);\n    }\n    /**\n     * Provide a safe fallback in case user has AdBlockers enabled.\n     * This is necessary since some of the events require collecting data before redirecting the user, and the redirection happens in the JS.\n     * @return {[type]} [description]\n     */\n\n  }, {\n    key: \"safeTrackMethod\",\n    value: function safeTrackMethod(trackMethod) {\n      var options = [].slice.call(arguments, 1);\n\n      try {\n        trackMethod.apply(this, options);\n      } catch (e) {\n        console.error(e);\n      }\n    }\n  }, {\n    key: \"runTrackingMethod\",\n    value: function runTrackingMethod(trackEvent, trackObject) {\n      var trackMethodName = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 'push';\n      var trackMethod = window[DATA_LAYER][trackMethodName] || window[DATA_LAYER];\n\n      if (_typeof(trackObject) === 'object') {\n        trackObject.event = trackObject.hasOwnProperty('trackEvent') ? trackObject['trackEvent'] : trackEvent;\n\n        if (trackObject.dataLayers && trackObject.dataLayers.length) {\n          trackObject.dataLayers.forEach(function (currentLayer) {\n            TrackingLayer.safeTrackMethod(trackMethod, currentLayer);\n          });\n        } else {\n          TrackingLayer.safeTrackMethod(trackMethod, trackObject);\n        }\n      } else {\n        TrackingLayer.safeTrackMethod(trackMethod, trackEvent, trackObject);\n      }\n\n      if (DEBUG_MODE) {\n        console.log(trackObject);\n      }\n\n      return $.Deferred().resolve(trackObject).promise();\n    }\n  }]);\n\n  return TrackingLayer;\n}();\n\n\n\n//# sourceURL=webpack:///./cartridges/app_accelerator_core/cartridge/client/default/js/modules/module.tracking-layer.js?");

/***/ }),

/***/ "./node_modules/scrollmonitor/scrollMonitor.js":
/*!*****************************************************!*\
  !*** ./node_modules/scrollmonitor/scrollMonitor.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("!function(t,e){ true?module.exports=e():undefined}(this,function(){return function(t){function e(o){if(i[o])return i[o].exports;var s=i[o]={exports:{},id:o,loaded:!1};return t[o].call(s.exports,s,s.exports,e),s.loaded=!0,s.exports}var i={};return e.m=t,e.c=i,e.p=\"\",e(0)}([function(t,e,i){\"use strict\";var o=i(1),s=o.isInBrowser,n=i(2),r=new n(s?document.body:null);r.setStateFromDOM(null),r.listenToDOM(),s&&(window.scrollMonitor=r),t.exports=r},function(t,e){\"use strict\";e.VISIBILITYCHANGE=\"visibilityChange\",e.ENTERVIEWPORT=\"enterViewport\",e.FULLYENTERVIEWPORT=\"fullyEnterViewport\",e.EXITVIEWPORT=\"exitViewport\",e.PARTIALLYEXITVIEWPORT=\"partiallyExitViewport\",e.LOCATIONCHANGE=\"locationChange\",e.STATECHANGE=\"stateChange\",e.eventTypes=[e.VISIBILITYCHANGE,e.ENTERVIEWPORT,e.FULLYENTERVIEWPORT,e.EXITVIEWPORT,e.PARTIALLYEXITVIEWPORT,e.LOCATIONCHANGE,e.STATECHANGE],e.isOnServer=\"undefined\"==typeof window,e.isInBrowser=!e.isOnServer,e.defaultOffsets={top:0,bottom:0}},function(t,e,i){\"use strict\";function o(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}function s(t){return c?0:t===document.body?window.innerHeight||document.documentElement.clientHeight:t.clientHeight}function n(t){return c?0:t===document.body?Math.max(document.body.scrollHeight,document.documentElement.scrollHeight,document.body.offsetHeight,document.documentElement.offsetHeight,document.documentElement.clientHeight):t.scrollHeight}function r(t){return c?0:t===document.body?window.pageYOffset||document.documentElement&&document.documentElement.scrollTop||document.body.scrollTop:t.scrollTop}var h=i(1),c=h.isOnServer,a=h.isInBrowser,l=h.eventTypes,p=i(3),u=!1;if(a)try{var w=Object.defineProperty({},\"passive\",{get:function(){u=!0}});window.addEventListener(\"test\",null,w)}catch(t){}var d=!!u&&{capture:!1,passive:!0},f=function(){function t(e,i){function h(){if(a.viewportTop=r(e),a.viewportBottom=a.viewportTop+a.viewportHeight,a.documentHeight=n(e),a.documentHeight!==p){for(u=a.watchers.length;u--;)a.watchers[u].recalculateLocation();p=a.documentHeight}}function c(){for(w=a.watchers.length;w--;)a.watchers[w].update();for(w=a.watchers.length;w--;)a.watchers[w].triggerCallbacks()}o(this,t);var a=this;this.item=e,this.watchers=[],this.viewportTop=null,this.viewportBottom=null,this.documentHeight=n(e),this.viewportHeight=s(e),this.DOMListener=function(){t.prototype.DOMListener.apply(a,arguments)},this.eventTypes=l,i&&(this.containerWatcher=i.create(e));var p,u,w;this.update=function(){h(),c()},this.recalculateLocations=function(){this.documentHeight=0,this.update()}}return t.prototype.listenToDOM=function(){a&&(window.addEventListener?(this.item===document.body?window.addEventListener(\"scroll\",this.DOMListener,d):this.item.addEventListener(\"scroll\",this.DOMListener,d),window.addEventListener(\"resize\",this.DOMListener)):(this.item===document.body?window.attachEvent(\"onscroll\",this.DOMListener):this.item.attachEvent(\"onscroll\",this.DOMListener),window.attachEvent(\"onresize\",this.DOMListener)),this.destroy=function(){window.addEventListener?(this.item===document.body?(window.removeEventListener(\"scroll\",this.DOMListener,d),this.containerWatcher.destroy()):this.item.removeEventListener(\"scroll\",this.DOMListener,d),window.removeEventListener(\"resize\",this.DOMListener)):(this.item===document.body?(window.detachEvent(\"onscroll\",this.DOMListener),this.containerWatcher.destroy()):this.item.detachEvent(\"onscroll\",this.DOMListener),window.detachEvent(\"onresize\",this.DOMListener))})},t.prototype.destroy=function(){},t.prototype.DOMListener=function(t){this.setStateFromDOM(t)},t.prototype.setStateFromDOM=function(t){var e=r(this.item),i=s(this.item),o=n(this.item);this.setState(e,i,o,t)},t.prototype.setState=function(t,e,i,o){var s=e!==this.viewportHeight||i!==this.contentHeight;if(this.latestEvent=o,this.viewportTop=t,this.viewportHeight=e,this.viewportBottom=t+e,this.contentHeight=i,s)for(var n=this.watchers.length;n--;)this.watchers[n].recalculateLocation();this.updateAndTriggerWatchers(o)},t.prototype.updateAndTriggerWatchers=function(t){for(var e=this.watchers.length;e--;)this.watchers[e].update();for(e=this.watchers.length;e--;)this.watchers[e].triggerCallbacks(t)},t.prototype.createCustomContainer=function(){return new t},t.prototype.createContainer=function(e){\"string\"==typeof e?e=document.querySelector(e):e&&e.length>0&&(e=e[0]);var i=new t(e,this);return i.setStateFromDOM(),i.listenToDOM(),i},t.prototype.create=function(t,e){\"string\"==typeof t?t=document.querySelector(t):t&&t.length>0&&(t=t[0]);var i=new p(this,t,e);return this.watchers.push(i),i},t.prototype.beget=function(t,e){return this.create(t,e)},t}();t.exports=f},function(t,e,i){\"use strict\";function o(t,e,i){function o(t,e){if(0!==t.length)for(E=t.length;E--;)y=t[E],y.callback.call(s,e,s),y.isOne&&t.splice(E,1)}var s=this;this.watchItem=e,this.container=t,i?i===+i?this.offsets={top:i,bottom:i}:this.offsets={top:i.top||w.top,bottom:i.bottom||w.bottom}:this.offsets=w,this.callbacks={};for(var d=0,f=u.length;d<f;d++)s.callbacks[u[d]]=[];this.locked=!1;var m,v,b,I,E,y;this.triggerCallbacks=function(t){switch(this.isInViewport&&!m&&o(this.callbacks[r],t),this.isFullyInViewport&&!v&&o(this.callbacks[h],t),this.isAboveViewport!==b&&this.isBelowViewport!==I&&(o(this.callbacks[n],t),v||this.isFullyInViewport||(o(this.callbacks[h],t),o(this.callbacks[a],t)),m||this.isInViewport||(o(this.callbacks[r],t),o(this.callbacks[c],t))),!this.isFullyInViewport&&v&&o(this.callbacks[a],t),!this.isInViewport&&m&&o(this.callbacks[c],t),this.isInViewport!==m&&o(this.callbacks[n],t),!0){case m!==this.isInViewport:case v!==this.isFullyInViewport:case b!==this.isAboveViewport:case I!==this.isBelowViewport:o(this.callbacks[p],t)}m=this.isInViewport,v=this.isFullyInViewport,b=this.isAboveViewport,I=this.isBelowViewport},this.recalculateLocation=function(){if(!this.locked){var t=this.top,e=this.bottom;if(this.watchItem.nodeName){var i=this.watchItem.style.display;\"none\"===i&&(this.watchItem.style.display=\"\");for(var s=0,n=this.container;n.containerWatcher;)s+=n.containerWatcher.top-n.containerWatcher.container.viewportTop,n=n.containerWatcher.container;var r=this.watchItem.getBoundingClientRect();this.top=r.top+this.container.viewportTop-s,this.bottom=r.bottom+this.container.viewportTop-s,\"none\"===i&&(this.watchItem.style.display=i)}else this.watchItem===+this.watchItem?this.watchItem>0?this.top=this.bottom=this.watchItem:this.top=this.bottom=this.container.documentHeight-this.watchItem:(this.top=this.watchItem.top,this.bottom=this.watchItem.bottom);this.top-=this.offsets.top,this.bottom+=this.offsets.bottom,this.height=this.bottom-this.top,void 0===t&&void 0===e||this.top===t&&this.bottom===e||o(this.callbacks[l],null)}},this.recalculateLocation(),this.update(),m=this.isInViewport,v=this.isFullyInViewport,b=this.isAboveViewport,I=this.isBelowViewport}var s=i(1),n=s.VISIBILITYCHANGE,r=s.ENTERVIEWPORT,h=s.FULLYENTERVIEWPORT,c=s.EXITVIEWPORT,a=s.PARTIALLYEXITVIEWPORT,l=s.LOCATIONCHANGE,p=s.STATECHANGE,u=s.eventTypes,w=s.defaultOffsets;o.prototype={on:function(t,e,i){switch(!0){case t===n&&!this.isInViewport&&this.isAboveViewport:case t===r&&this.isInViewport:case t===h&&this.isFullyInViewport:case t===c&&this.isAboveViewport&&!this.isInViewport:case t===a&&this.isInViewport&&this.isAboveViewport:if(e.call(this,this.container.latestEvent,this),i)return}if(!this.callbacks[t])throw new Error(\"Tried to add a scroll monitor listener of type \"+t+\". Your options are: \"+u.join(\", \"));this.callbacks[t].push({callback:e,isOne:i||!1})},off:function(t,e){if(!this.callbacks[t])throw new Error(\"Tried to remove a scroll monitor listener of type \"+t+\". Your options are: \"+u.join(\", \"));for(var i,o=0;i=this.callbacks[t][o];o++)if(i.callback===e){this.callbacks[t].splice(o,1);break}},one:function(t,e){this.on(t,e,!0)},recalculateSize:function(){this.height=this.watchItem.offsetHeight+this.offsets.top+this.offsets.bottom,this.bottom=this.top+this.height},update:function(){this.isAboveViewport=this.top<this.container.viewportTop,this.isBelowViewport=this.bottom>this.container.viewportBottom,this.isInViewport=this.top<this.container.viewportBottom&&this.bottom>this.container.viewportTop,this.isFullyInViewport=this.top>=this.container.viewportTop&&this.bottom<=this.container.viewportBottom||this.isAboveViewport&&this.isBelowViewport},destroy:function(){var t=this.container.watchers.indexOf(this),e=this;this.container.watchers.splice(t,1);for(var i=0,o=u.length;i<o;i++)e.callbacks[u[i]].length=0},lock:function(){this.locked=!0},unlock:function(){this.locked=!1}};for(var d=function(t){return function(e,i){this.on.call(this,t,e,i)}},f=0,m=u.length;f<m;f++){var v=u[f];o.prototype[v]=d(v)}t.exports=o}])});\n//# sourceMappingURL=scrollMonitor.js.map\n\n//# sourceURL=webpack:///./node_modules/scrollmonitor/scrollMonitor.js?");

/***/ })

}]);