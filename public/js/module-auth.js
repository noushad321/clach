(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["module-auth"],{

/***/ "./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js":
/*!******************************************************************************************!*\
  !*** ./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js ***!
  \******************************************************************************************/
/*! exports provided: open, replace, close, getActive, getModal, trigger */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"open\", function() { return open; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"replace\", function() { return replace; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"close\", function() { return close; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"getActive\", function() { return getActive; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"getModal\", function() { return getModal; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"trigger\", function() { return trigger; });\n/* harmony import */ var _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @borngroup/born-modal */ \"./node_modules/@borngroup/born-modal/dist/born-modal.min.js\");\n/* harmony import */ var _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @borngroup/born-utilities */ \"./node_modules/@borngroup/born-utilities/dist/born-utilities.min.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _customValidation__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./customValidation */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/customValidation.js\");\n/* harmony import */ var _helpers_utilities__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../helpers/utilities */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/helpers/utilities.js\");\n/* harmony import */ var _progress__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./progress */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/progress.js\");\n/* harmony import */ var _helpers_modules__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../helpers/modules */ \"./cartridges/app_staffsales_core/cartridge/client/default/js/helpers/modules.js\");\n/**\n * Wrapper for Born Modal.\n * Provides ease of usage for modals as well as some default fallbacks.\n */\n\n\n\n\n\n\n/**\n * @description populate the dialog with html content, then open it\n **/\n\nfunction _openWithContent(params) {\n  var content = params.content || params.html,\n      modalInstance;\n\n  if (content) {\n    var originalCallback;\n    params.options = Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__[\"objectAssign\"])({}, params.options);\n    params.tracking = Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__[\"objectAssign\"])({}, params.tracking);\n    params.options.content = content;\n    originalCallback = params.callback || params.options.afterCreateCallback;\n\n    params.options.afterCreateCallback = function (modal) {\n      if (typeof originalCallback === 'function') {\n        originalCallback(modal);\n      }\n\n      Object(_helpers_utilities__WEBPACK_IMPORTED_MODULE_3__[\"initModules\"])(modal);\n      _customValidation__WEBPACK_IMPORTED_MODULE_2__[\"init\"]();\n\n      _handleTracking(modal, params);\n    };\n\n    modalInstance = new _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a(params.options);\n    delete params.options.afterCreateCallback;\n    return modalInstance;\n  }\n}\n/**\n * @description Replace the content of current dialog\n * @param {object} params\n * @param {string} params.url - If the url property is provided, an ajax call is performed to get the content to replace\n * @param {string} params.html - If no url property is provided, use html provided to replace\n */\n\n\nfunction open(params) {\n  var targetModal;\n  params.options = params.options || {};\n  targetModal = _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getModal(params.options.modalID); //Avoid making unnecessary requests if modal was already loaded once.\n\n  if (targetModal) {\n    //Makes sure the afterOpenCallback is taken from the object every time, in case the values change.\n    targetModal.modal.afterOpenCallback = params.options.afterOpenCallback || function () {\n      return false;\n    };\n\n    targetModal.modal.open();\n  } else {\n    if (params.url) {\n      _progress__WEBPACK_IMPORTED_MODULE_4__[\"showLoader\"]();\n      $.ajax({\n        dataType: params.type || 'json',\n        url: params.url,\n        data: params.data,\n        xhrFields: {\n          withCredentials: true\n        }\n      }).done(function (response) {\n        _progress__WEBPACK_IMPORTED_MODULE_4__[\"hideLoader\"]();\n        params.content = typeof response === 'string' ? response : response.renderedTemplate || response.content;\n\n        _openWithContent(params);\n      }).fail(function (xhr, textStatus) {\n        // failed\n        if (textStatus === 'parsererror') {\n          console.log('Bad response type. Check if your `dataType` request matches the response type.');\n        }\n      });\n    } else if (params.html) {\n      _openWithContent(params);\n    } else if (params.selector) {\n      params.content = document.querySelector(params.selector);\n\n      _openWithContent(params);\n    }\n  }\n}\nfunction replace(options) {\n  var modal = options.modalID ? _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getModal(options.modalID) : _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getActiveModal();\n  _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.updateModal(modal, options.content, options.newID);\n}\n/**\n * @function\n * @description Closes the dialog\n */\n\nfunction close() {\n  _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.closeModal();\n}\nfunction getActive() {\n  return _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getActiveModal();\n}\n/**\n * Returns the matched Modal element.\n * @param  {[type]} modalID [description]\n * @return {[type]}         [description]\n */\n\nfunction getModal(modalID) {\n  return _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getModal(modalID);\n}\nfunction trigger(els, params) {\n  Object(_helpers_utilities__WEBPACK_IMPORTED_MODULE_3__[\"addEventListenerList\"])(els, 'click', function (evt) {\n    evt.preventDefault();\n\n    if (!params.url && !params.html && !params.selector) {\n      params.selector = this.getAttribute('href');\n    }\n\n    open(params);\n  });\n}\n\nfunction _handleTracking(modal, params) {\n  var trackEvent = params.tracking.trackEvent || 'virtualPageview',\n      trackObject = trackEvent === 'virtualPageview' ? {\n    asyncURL: window.SFRA.Urls.GTMVirtualView,\n    asyncParams: {\n      nameOfPopin: params.tracking.modalName || params.options.modalID\n    }\n  } : params.tracking.trackObject;\n  _helpers_modules__WEBPACK_IMPORTED_MODULE_5__[\"default\"].tracking.init(null, {\n    trackEvent: trackEvent,\n    trackObject: trackObject\n  });\n}\n\n//# sourceURL=webpack:///./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js?");

/***/ }),

/***/ "./cartridges/app_accelerator_core/cartridge/client/default/js/modules/module.auth.js":
/*!********************************************************************************************!*\
  !*** ./cartridges/app_accelerator_core/cartridge/client/default/js/modules/module.auth.js ***!
  \********************************************************************************************/
/*! exports provided: init */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"init\", function() { return init; });\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @borngroup/born-utilities */ \"./node_modules/@borngroup/born-utilities/dist/born-utilities.min.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _components_dialog__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/dialog */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js\");\n/* harmony import */ var _helpers_urlUtilities__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../helpers/urlUtilities */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/helpers/urlUtilities.js\");\n\n\n\n\n\nvar EXCLUDED_ROUTES = ['Login-Show', 'Wishlist-Show', 'Checkout-Login'];\n/**\n * Sets up event Auth Modal event listening.\n * Clicking on these elements displays a login/register modal.\n */\n\nfunction init(options) {\n  options.dataAttribute = options.dataAttribute || 'data-auth-trigger';\n  Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0__[\"callbackOnElements\"])(options.elements, function (currentTrigger) {\n    var triggerDataString = currentTrigger.getAttribute(options.dataAttribute),\n        triggerDataObject = triggerDataString ? JSON.parse(triggerDataString) : {};\n    currentTrigger.setAttribute('data-auth-required', true);\n    currentTrigger.addEventListener('click', function (evt) {\n      if (currentTrigger.hasAttribute('data-auth-required') && !evt.metaKey && !_isExcludedRoute()) {\n        evt.preventDefault();\n\n        if (!window.SFRA.sessionData.loggedin) {\n          openAuthModal(currentTrigger, triggerDataObject);\n        } else {\n          getSessionStatus(function (response) {\n            if (!response.loggedin) {\n              openAuthModal(currentTrigger, triggerDataObject);\n            } else {\n              currentTrigger.removeAttribute('data-auth-required');\n              this.click();\n            }\n          }.bind(this));\n        }\n      }\n    });\n\n    if (triggerDataObject.auto) {\n      openAuthModal(currentTrigger, triggerDataObject);\n    }\n\n    currentTrigger.removeAttribute(options.dataAttribute);\n  }); //Run this on every page load to check if there's any data we should be parsing.\n  // retrieveFormData();\n}\n/**\n * Check if the current page is one of the excluded routes.\n * Used to avoid loading the Auth modal on these pages.\n */\n\nfunction _isExcludedRoute() {\n  var isExcluded = false;\n  EXCLUDED_ROUTES.forEach(function (currentRoute) {\n    if (document.querySelector(\"[data-action=\\\"\".concat(currentRoute, \"\\\"]\"))) {\n      isExcluded = true;\n    }\n  });\n  return isExcluded;\n}\n/**\n * Adds listeners to store form information.\n * @param  {[type]} modalEl  [description]\n * @param  {[type]} formData [description]\n * @return {[type]}          [description]\n */\n// function setupFormListeners(modalEl, formData) {\n//     let saveEls = modalEl.querySelectorAll('form, [data-auth-save]');\n//     [].forEach.call(saveEls, function(currentEl) {\n//         let evtType = currentEl.nodeName === 'FORM' ? 'submit' : 'click';\n//         currentEl.addEventListener(evtType, setFormData.bind(currentEl, formData));\n//     });\n// }\n\n/**\n * Stores form or URL data which should be retrieved next time user lands on the same page after login in.\n * @param {[type]} formData [description]\n */\n// function setFormData(formData) {\n//     //Store the current URL to match against it when the user comes back to the page.\n//     formData.previousURL = formData.matchURL ? window.location.pathname : '';\n//     window.localStorage.setItem('pendingFormData', JSON.stringify(formData));\n// }\n\n/**\n * Clears the pendingFormData from localStorage.\n * This is called every time the user opens the login modal.\n * @return {[type]} [description]\n */\n// function removeFormData() {\n//     window.localStorage.removeItem('pendingFormData');\n// }\n\n/**\n * Attempts to retrieve the pendingFormData from the localStorage.\n * If data is found, either attempt to submit an existing form again, or send an AJAX request.\n * Removes the pendingFormData after a match is found.\n * @return {[type]} [description]\n */\n// function retrieveFormData() {\n//     let formString = window.localStorage.getItem('pendingFormData'),\n//         formData = formString ? JSON.parse(window.localStorage.getItem('pendingFormData')) : false;\n//     if (formData && (!formData.matchURL || (formData.matchURL && window.location.pathname === formData.previousURL))) {\n//         //Retrieve formData and get the form submit selector, which we then click to resubmit a pending form.\n//         if (formData.formSelector) {\n//             let formEl = document.querySelector(formData.formSelector),\n//                 submitEl = formEl ? formEl.querySelector(formData.submitSelector) : false;\n//             if (submitEl) {\n//                 submitEl.click();\n//             }\n//         } else if (formData.url && formData.modalOptions) {\n//             //Request a modal if .url and .modalOptions are available.\n//             dialog.open({\n//                 url: formData.url,\n//                 options: formData.modalOptions\n//             });\n//         }\n//         removeFormData();\n//     }\n// }\n\n/**\n * Opens the auth modal.\n * @param  {[type]} options [description]\n * @return {[type]}         [description]\n */\n\n\nfunction openAuthModal(currentTrigger) {\n  var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};\n  var targetURL,\n      targetModalID = 'auth',\n      targetModalClass = 'modal--auth modal--base modal--flex'; //To learn how to add custom redirect URLs, see: */cartridge/config/oAuthRenentryRedirectEndpoints.js\n\n  options.rurl = options.rurl || 1;\n  targetURL = Object(_helpers_urlUtilities__WEBPACK_IMPORTED_MODULE_2__[\"appendParamsToURL\"])(window.SFRA.Urls.loginShow, {\n    rurl: options.rurl,\n    renderView: 'modal',\n    action: options.action\n  });\n  _components_dialog__WEBPACK_IMPORTED_MODULE_1__[\"open\"]({\n    url: targetURL,\n    type: 'html',\n    options: {\n      modalID: targetModalID,\n      modalClass: targetModalClass,\n      keepAlive: false,\n      overlayOthers: true,\n      afterCloseFocusEl: currentTrigger // afterCloseCallback: removeFormData\n\n    },\n    callback: function callback() {\n      // removeFormData();\n      // if (options.formData) {\n      //     setupFormListeners(modalEl, options.formData);\n      // }\n      init({\n        elements: \"[\".concat(options.dataAttribute, \"]\")\n      });\n    }\n  });\n}\n/**\n * Gets the current session status from the getActiveSession endpoint.\n * @param  {Function} callback [description]\n * @return {[type]}            [description]\n */\n\n\nfunction getSessionStatus(callback) {\n  $.get(window.SFRA.Urls.getActiveSession, function (response) {\n    callback(response);\n  });\n}\n\n//# sourceURL=webpack:///./cartridges/app_accelerator_core/cartridge/client/default/js/modules/module.auth.js?");

/***/ })

}]);