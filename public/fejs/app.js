/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/@babel/runtime/regenerator/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/@babel/runtime/regenerator/index.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__(/*! regenerator-runtime */ "./node_modules/regenerator-runtime/runtime.js");


/***/ }),

/***/ "./resources/fejs/alpine.min.js":
/*!**************************************!*\
  !*** ./resources/fejs/alpine.min.js ***!
  \**************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* module decorator */ module = __webpack_require__.hmd(module);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/**
 * Minified by jsDelivr using Terser v5.3.5.
 * Original file: /gh/alpinejs/alpine@2.8.0/dist/alpine.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
!function (e, t) {
  "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) && "undefined" != "object" ? module.exports = t() : "function" == typeof define && __webpack_require__.amdO ? define(t) : (e = e || self).Alpine = t();
}(undefined, function () {
  "use strict";

  function e(e, t, n) {
    return t in e ? Object.defineProperty(e, t, {
      value: n,
      enumerable: !0,
      configurable: !0,
      writable: !0
    }) : e[t] = n, e;
  }

  function t(e, t) {
    var n = Object.keys(e);

    if (Object.getOwnPropertySymbols) {
      var i = Object.getOwnPropertySymbols(e);
      t && (i = i.filter(function (t) {
        return Object.getOwnPropertyDescriptor(e, t).enumerable;
      })), n.push.apply(n, i);
    }

    return n;
  }

  function n(n) {
    for (var i = 1; i < arguments.length; i++) {
      var r = null != arguments[i] ? arguments[i] : {};
      i % 2 ? t(Object(r), !0).forEach(function (t) {
        e(n, t, r[t]);
      }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(n, Object.getOwnPropertyDescriptors(r)) : t(Object(r)).forEach(function (e) {
        Object.defineProperty(n, e, Object.getOwnPropertyDescriptor(r, e));
      });
    }

    return n;
  }

  function i(e) {
    return Array.from(new Set(e));
  }

  function r() {
    return navigator.userAgent.includes("Node.js") || navigator.userAgent.includes("jsdom");
  }

  function s(e, t) {
    return e == t;
  }

  function o(e, t) {
    "template" !== e.tagName.toLowerCase() ? console.warn("Alpine: [".concat(t, "] directive should only be added to <template> tags. See https://github.com/alpinejs/alpine#").concat(t)) : 1 !== e.content.childElementCount && console.warn("Alpine: <template> tag with [".concat(t, "] encountered with multiple element roots. Make sure <template> only has a single child element."));
  }

  function a(e) {
    return e.toLowerCase().replace(/-(\w)/g, function (e, t) {
      return t.toUpperCase();
    });
  }

  function l(e, t) {
    if (!1 === t(e)) return;
    var n = e.firstElementChild;

    for (; n;) {
      l(n, t), n = n.nextElementSibling;
    }
  }

  function c(e, t) {
    var n;
    return function () {
      var i = this,
          r = arguments,
          s = function s() {
        n = null, e.apply(i, r);
      };

      clearTimeout(n), n = setTimeout(s, t);
    };
  }

  var u = function u(e, t, n) {
    if (console.warn("Alpine Error: \"".concat(n, "\"\n\nExpression: \"").concat(t, "\"\nElement:"), e), !r()) throw n;
  };

  function d(e, _ref) {
    var t = _ref.el,
        n = _ref.expression;

    try {
      var _i = e();

      return _i instanceof Promise ? _i["catch"](function (e) {
        return u(t, n, e);
      }) : _i;
    } catch (e) {
      u(t, n, e);
    }
  }

  function f(e, t, n) {
    var i = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : {};
    return d(function () {
      return "function" == typeof t ? t.call(n) : new Function(["$data"].concat(_toConsumableArray(Object.keys(i))), "var __alpine_result; with($data) { __alpine_result = ".concat(t, " }; return __alpine_result")).apply(void 0, [n].concat(_toConsumableArray(Object.values(i))));
    }, {
      el: e,
      expression: t
    });
  }

  var m = /^x-(on|bind|data|text|html|model|if|for|show|cloak|transition|ref|spread)\b/;

  function p(e) {
    var t = y(e.name);
    return m.test(t);
  }

  function h(e, t, n) {
    var i = Array.from(e.attributes).filter(p).map(v),
        r = i.filter(function (e) {
      return "spread" === e.type;
    })[0];

    if (r) {
      var _n = f(e, r.expression, t.$data);

      i = i.concat(Object.entries(_n).map(function (_ref2) {
        var _ref3 = _slicedToArray(_ref2, 2),
            e = _ref3[0],
            t = _ref3[1];

        return v({
          name: e,
          value: t
        });
      }));
    }

    return n ? i.filter(function (e) {
      return e.type === n;
    }) : function (e) {
      var t = ["bind", "model", "show", "catch-all"];
      return e.sort(function (e, n) {
        var i = -1 === t.indexOf(e.type) ? "catch-all" : e.type,
            r = -1 === t.indexOf(n.type) ? "catch-all" : n.type;
        return t.indexOf(i) - t.indexOf(r);
      });
    }(i);
  }

  function v(_ref4) {
    var e = _ref4.name,
        t = _ref4.value;
    var n = y(e),
        i = n.match(m),
        r = n.match(/:([a-zA-Z0-9\-:]+)/),
        s = n.match(/\.[^.\]]+(?=[^\]]*$)/g) || [];
    return {
      type: i ? i[1] : null,
      value: r ? r[1] : null,
      modifiers: s.map(function (e) {
        return e.replace(".", "");
      }),
      expression: t
    };
  }

  function y(e) {
    return e.startsWith("@") ? e.replace("@", "x-on:") : e.startsWith(":") ? e.replace(":", "x-bind:") : e;
  }

  function b(e) {
    var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : Boolean;
    return e.split(" ").filter(t);
  }

  var x = "in",
      g = "out",
      _ = "cancelled";

  function w(e, t, n, i) {
    var r = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : !1;
    if (r) return t();
    if (e.__x_transition && e.__x_transition.type === x) return;
    var s = h(e, i, "transition"),
        o = h(e, i, "show")[0];

    if (o && o.modifiers.includes("transition")) {
      var _i2 = o.modifiers;
      if (_i2.includes("out") && !_i2.includes("in")) return t();

      var _r = _i2.includes("in") && _i2.includes("out");

      _i2 = _r ? _i2.filter(function (e, t) {
        return t < _i2.indexOf("out");
      }) : _i2, function (e, t, n, i) {
        var r = {
          duration: O(t, "duration", 150),
          origin: O(t, "origin", "center"),
          first: {
            opacity: 0,
            scale: O(t, "scale", 95)
          },
          second: {
            opacity: 1,
            scale: 100
          }
        };
        k(e, t, n, function () {}, i, r, x);
      }(e, _i2, t, n);
    } else s.some(function (e) {
      return ["enter", "enter-start", "enter-end"].includes(e.value);
    }) ? function (e, t, n, i, r) {
      var s = b(A((n.find(function (e) {
        return "enter" === e.value;
      }) || {
        expression: ""
      }).expression, e, t)),
          o = b(A((n.find(function (e) {
        return "enter-start" === e.value;
      }) || {
        expression: ""
      }).expression, e, t)),
          a = b(A((n.find(function (e) {
        return "enter-end" === e.value;
      }) || {
        expression: ""
      }).expression, e, t));
      S(e, s, o, a, i, function () {}, x, r);
    }(e, i, s, t, n) : t();
  }

  function E(e, t, n, i) {
    var r = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : !1;
    if (r) return t();
    if (e.__x_transition && e.__x_transition.type === g) return;
    var s = h(e, i, "transition"),
        o = h(e, i, "show")[0];

    if (o && o.modifiers.includes("transition")) {
      var _i3 = o.modifiers;
      if (_i3.includes("in") && !_i3.includes("out")) return t();

      var _r2 = _i3.includes("in") && _i3.includes("out");

      _i3 = _r2 ? _i3.filter(function (e, t) {
        return t > _i3.indexOf("out");
      }) : _i3, function (e, t, n, i, r) {
        var s = {
          duration: n ? O(t, "duration", 150) : O(t, "duration", 150) / 2,
          origin: O(t, "origin", "center"),
          first: {
            opacity: 1,
            scale: 100
          },
          second: {
            opacity: 0,
            scale: O(t, "scale", 95)
          }
        };
        k(e, t, function () {}, i, r, s, g);
      }(e, _i3, _r2, t, n);
    } else s.some(function (e) {
      return ["leave", "leave-start", "leave-end"].includes(e.value);
    }) ? function (e, t, n, i, r) {
      var s = b(A((n.find(function (e) {
        return "leave" === e.value;
      }) || {
        expression: ""
      }).expression, e, t)),
          o = b(A((n.find(function (e) {
        return "leave-start" === e.value;
      }) || {
        expression: ""
      }).expression, e, t)),
          a = b(A((n.find(function (e) {
        return "leave-end" === e.value;
      }) || {
        expression: ""
      }).expression, e, t));
      S(e, s, o, a, function () {}, i, g, r);
    }(e, i, s, t, n) : t();
  }

  function O(e, t, n) {
    if (-1 === e.indexOf(t)) return n;
    var i = e[e.indexOf(t) + 1];
    if (!i) return n;
    if ("scale" === t && !P(i)) return n;

    if ("duration" === t) {
      var _e2 = i.match(/([0-9]+)ms/);

      if (_e2) return _e2[1];
    }

    return "origin" === t && ["top", "right", "left", "center", "bottom"].includes(e[e.indexOf(t) + 2]) ? [i, e[e.indexOf(t) + 2]].join(" ") : i;
  }

  function k(e, t, n, i, r, s, o) {
    e.__x_transition && e.__x_transition.cancel && e.__x_transition.cancel();
    var a = e.style.opacity,
        l = e.style.transform,
        c = e.style.transformOrigin,
        u = !t.includes("opacity") && !t.includes("scale"),
        d = u || t.includes("opacity"),
        f = u || t.includes("scale"),
        m = {
      start: function start() {
        d && (e.style.opacity = s.first.opacity), f && (e.style.transform = "scale(".concat(s.first.scale / 100, ")"));
      },
      during: function during() {
        f && (e.style.transformOrigin = s.origin), e.style.transitionProperty = [d ? "opacity" : "", f ? "transform" : ""].join(" ").trim(), e.style.transitionDuration = s.duration / 1e3 + "s", e.style.transitionTimingFunction = "cubic-bezier(0.4, 0.0, 0.2, 1)";
      },
      show: function show() {
        n();
      },
      end: function end() {
        d && (e.style.opacity = s.second.opacity), f && (e.style.transform = "scale(".concat(s.second.scale / 100, ")"));
      },
      hide: function hide() {
        i();
      },
      cleanup: function cleanup() {
        d && (e.style.opacity = a), f && (e.style.transform = l), f && (e.style.transformOrigin = c), e.style.transitionProperty = null, e.style.transitionDuration = null, e.style.transitionTimingFunction = null;
      }
    };
    $(e, m, o, r);
  }

  var A = function A(e, t, n) {
    return "function" == typeof e ? n.evaluateReturnExpression(t, e) : e;
  };

  function S(e, t, n, i, r, s, o, a) {
    e.__x_transition && e.__x_transition.cancel && e.__x_transition.cancel();
    var l = e.__x_original_classes || [],
        c = {
      start: function start() {
        var _e$classList;

        (_e$classList = e.classList).add.apply(_e$classList, _toConsumableArray(n));
      },
      during: function during() {
        var _e$classList2;

        (_e$classList2 = e.classList).add.apply(_e$classList2, _toConsumableArray(t));
      },
      show: function show() {
        r();
      },
      end: function end() {
        var _e$classList3, _e$classList4;

        (_e$classList3 = e.classList).remove.apply(_e$classList3, _toConsumableArray(n.filter(function (e) {
          return !l.includes(e);
        }))), (_e$classList4 = e.classList).add.apply(_e$classList4, _toConsumableArray(i));
      },
      hide: function hide() {
        s();
      },
      cleanup: function cleanup() {
        var _e$classList5, _e$classList6;

        (_e$classList5 = e.classList).remove.apply(_e$classList5, _toConsumableArray(t.filter(function (e) {
          return !l.includes(e);
        }))), (_e$classList6 = e.classList).remove.apply(_e$classList6, _toConsumableArray(i.filter(function (e) {
          return !l.includes(e);
        })));
      }
    };
    $(e, c, o, a);
  }

  function $(e, t, n, i) {
    var r = C(function () {
      t.hide(), e.isConnected && t.cleanup(), delete e.__x_transition;
    });
    e.__x_transition = {
      type: n,
      cancel: C(function () {
        i(_), r();
      }),
      finish: r,
      nextFrame: null
    }, t.start(), t.during(), e.__x_transition.nextFrame = requestAnimationFrame(function () {
      var n = 1e3 * Number(getComputedStyle(e).transitionDuration.replace(/,.*/, "").replace("s", ""));
      0 === n && (n = 1e3 * Number(getComputedStyle(e).animationDuration.replace("s", ""))), t.show(), e.__x_transition.nextFrame = requestAnimationFrame(function () {
        t.end(), setTimeout(e.__x_transition.finish, n);
      });
    });
  }

  function P(e) {
    return !Array.isArray(e) && !isNaN(e);
  }

  function C(e) {
    var t = !1;
    return function () {
      t || (t = !0, e.apply(this, arguments));
    };
  }

  function D(e, t, i, r, s) {
    o(t, "x-for");

    var a = j("function" == typeof i ? e.evaluateReturnExpression(t, i) : i),
        l = function (e, t, n, i) {
      var r = h(t, e, "if")[0];
      if (r && !e.evaluateReturnExpression(t, r.expression)) return [];
      var s = e.evaluateReturnExpression(t, n.items, i);
      P(s) && s > 0 && (s = Array.from(Array(s).keys(), function (e) {
        return e + 1;
      }));
      return s;
    }(e, t, a, s),
        c = t;

    l.forEach(function (i, o) {
      var u = function (e, t, i, r, s) {
        var o = s ? n({}, s) : {};
        o[e.item] = t, e.index && (o[e.index] = i);
        e.collection && (o[e.collection] = r);
        return o;
      }(a, i, o, l, s()),
          d = function (e, t, n, i) {
        var r = h(t, e, "bind").filter(function (e) {
          return "key" === e.value;
        })[0];
        return r ? e.evaluateReturnExpression(t, r.expression, function () {
          return i;
        }) : n;
      }(e, t, o, u),
          f = function (e, t) {
        if (!e) return;
        if (void 0 === e.__x_for_key) return;
        if (e.__x_for_key === t) return e;
        var n = e;

        for (; n;) {
          if (n.__x_for_key === t) return n.parentElement.insertBefore(n, e);
          n = !(!n.nextElementSibling || void 0 === n.nextElementSibling.__x_for_key) && n.nextElementSibling;
        }
      }(c.nextElementSibling, d);

      f ? (delete f.__x_for_key, f.__x_for = u, e.updateElements(f, function () {
        return f.__x_for;
      })) : (f = function (e, t) {
        var n = document.importNode(e.content, !0);
        return t.parentElement.insertBefore(n, t.nextElementSibling), t.nextElementSibling;
      }(t, c), w(f, function () {}, function () {}, e, r), f.__x_for = u, e.initializeElements(f, function () {
        return f.__x_for;
      })), c = f, c.__x_for_key = d;
    }), function (e, t) {
      var n = !(!e.nextElementSibling || void 0 === e.nextElementSibling.__x_for_key) && e.nextElementSibling;

      var _loop = function _loop() {
        var e = n,
            i = n.nextElementSibling;
        E(n, function () {
          e.remove();
        }, function () {}, t), n = !(!i || void 0 === i.__x_for_key) && i;
      };

      for (; n;) {
        _loop();
      }
    }(c, e);
  }

  function j(e) {
    var t = /,([^,\}\]]*)(?:,([^,\}\]]*))?$/,
        n = e.match(/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/);
    if (!n) return;
    var i = {};
    i.items = n[2].trim();
    var r = n[1].trim().replace(/^\(|\)$/g, ""),
        s = r.match(t);
    return s ? (i.item = r.replace(t, "").trim(), i.index = s[1].trim(), s[2] && (i.collection = s[2].trim())) : i.item = r, i;
  }

  function T(e, t, n, r, o, l, c) {
    var u = e.evaluateReturnExpression(t, r, o);

    if ("value" === n) {
      if (xe.ignoreFocusedForValueBinding && document.activeElement.isSameNode(t)) return;
      if (void 0 === u && r.match(/\./) && (u = ""), "radio" === t.type) void 0 === t.attributes.value && "bind" === l ? t.value = u : "bind" !== l && (t.checked = s(t.value, u));else if ("checkbox" === t.type) "boolean" == typeof u || [null, void 0].includes(u) || "bind" !== l ? "bind" !== l && (Array.isArray(u) ? t.checked = u.some(function (e) {
        return s(e, t.value);
      }) : t.checked = !!u) : t.value = String(u);else if ("SELECT" === t.tagName) !function (e, t) {
        var n = [].concat(t).map(function (e) {
          return e + "";
        });
        Array.from(e.options).forEach(function (e) {
          e.selected = n.includes(e.value || e.text);
        });
      }(t, u);else {
        if (t.value === u) return;
        t.value = u;
      }
    } else if ("class" === n) {
      if (Array.isArray(u)) {
        var _e3 = t.__x_original_classes || [];

        t.setAttribute("class", i(_e3.concat(u)).join(" "));
      } else if ("object" == _typeof(u)) {
        Object.keys(u).sort(function (e, t) {
          return u[e] - u[t];
        }).forEach(function (e) {
          u[e] ? b(e).forEach(function (e) {
            return t.classList.add(e);
          }) : b(e).forEach(function (e) {
            return t.classList.remove(e);
          });
        });
      } else {
        var _e4 = t.__x_original_classes || [],
            _n2 = u ? b(u) : [];

        t.setAttribute("class", i(_e4.concat(_n2)).join(" "));
      }
    } else n = c.includes("camel") ? a(n) : n, [null, void 0, !1].includes(u) ? t.removeAttribute(n) : !function (e) {
      return ["disabled", "checked", "required", "readonly", "hidden", "open", "selected", "autofocus", "itemscope", "multiple", "novalidate", "allowfullscreen", "allowpaymentrequest", "formnovalidate", "autoplay", "controls", "loop", "muted", "playsinline", "default", "ismap", "reversed", "async", "defer", "nomodule"].includes(e);
    }(n) ? L(t, n, u) : L(t, n, n);
  }

  function L(e, t, n) {
    e.getAttribute(t) != n && e.setAttribute(t, n);
  }

  function N(e, t, n, i, r) {
    var s = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : {};
    var o = {
      passive: i.includes("passive")
    };

    if (i.includes("camel") && (n = a(n)), i.includes("away")) {
      var _a = function _a(l) {
        t.contains(l.target) || t.offsetWidth < 1 && t.offsetHeight < 1 || (z(e, r, l, s), i.includes("once") && document.removeEventListener(n, _a, o));
      };

      document.addEventListener(n, _a, o);
    } else {
      var _a2 = i.includes("window") ? window : i.includes("document") ? document : t,
          _l2 = function _l(c) {
        if (_a2 !== window && _a2 !== document || document.body.contains(t)) {
          if (!(function (e) {
            return ["keydown", "keyup"].includes(e);
          }(n) && function (e, t) {
            var n = t.filter(function (e) {
              return !["window", "document", "prevent", "stop"].includes(e);
            });

            if (n.includes("debounce")) {
              var _e5 = n.indexOf("debounce");

              n.splice(_e5, P((n[_e5 + 1] || "invalid-wait").split("ms")[0]) ? 2 : 1);
            }

            if (0 === n.length) return !1;
            if (1 === n.length && n[0] === R(e.key)) return !1;
            var i = ["ctrl", "shift", "alt", "meta", "cmd", "super"].filter(function (e) {
              return n.includes(e);
            });

            if (n = n.filter(function (e) {
              return !i.includes(e);
            }), i.length > 0) {
              if (i.filter(function (t) {
                return "cmd" !== t && "super" !== t || (t = "meta"), e[t + "Key"];
              }).length === i.length && n[0] === R(e.key)) return !1;
            }

            return !0;
          }(c, i) || (i.includes("prevent") && c.preventDefault(), i.includes("stop") && c.stopPropagation(), i.includes("self") && c.target !== t))) {
            z(e, r, c, s).then(function (e) {
              !1 === e ? c.preventDefault() : i.includes("once") && _a2.removeEventListener(n, _l2, o);
            });
          }
        } else _a2.removeEventListener(n, _l2, o);
      };

      if (i.includes("debounce")) {
        var _e6 = i[i.indexOf("debounce") + 1] || "invalid-wait",
            _t = P(_e6.split("ms")[0]) ? Number(_e6.split("ms")[0]) : 250;

        _l2 = c(_l2, _t);
      }

      _a2.addEventListener(n, _l2, o);
    }
  }

  function z(e, t, i, r) {
    return e.evaluateCommandExpression(i.target, t, function () {
      return n(n({}, r()), {}, {
        $event: i
      });
    });
  }

  function R(e) {
    switch (e) {
      case "/":
        return "slash";

      case " ":
      case "Spacebar":
        return "space";

      default:
        return e && e.replace(/([a-z])([A-Z])/g, "$1-$2").replace(/[_\s]/, "-").toLowerCase();
    }
  }

  function F(e, t, n) {
    return "radio" === e.type && (e.hasAttribute("name") || e.setAttribute("name", n)), function (n, i) {
      if (n instanceof CustomEvent && n.detail) return n.detail;

      if ("checkbox" === e.type) {
        if (Array.isArray(i)) {
          var _e7 = t.includes("number") ? I(n.target.value) : n.target.value;

          return n.target.checked ? i.concat([_e7]) : i.filter(function (t) {
            return !s(t, _e7);
          });
        }

        return n.target.checked;
      }

      if ("select" === e.tagName.toLowerCase() && e.multiple) return t.includes("number") ? Array.from(n.target.selectedOptions).map(function (e) {
        return I(e.value || e.text);
      }) : Array.from(n.target.selectedOptions).map(function (e) {
        return e.value || e.text;
      });
      {
        var _e8 = n.target.value;
        return t.includes("number") ? I(_e8) : t.includes("trim") ? _e8.trim() : _e8;
      }
    };
  }

  function I(e) {
    var t = e ? parseFloat(e) : null;
    return P(t) ? t : e;
  }

  var M = Array.isArray,
      B = Object.getPrototypeOf,
      q = Object.create,
      U = Object.defineProperty,
      W = Object.defineProperties,
      K = Object.isExtensible,
      G = Object.getOwnPropertyDescriptor,
      H = Object.getOwnPropertyNames,
      V = Object.getOwnPropertySymbols,
      Z = Object.preventExtensions,
      J = Object.hasOwnProperty,
      _Array$prototype = Array.prototype,
      Q = _Array$prototype.push,
      X = _Array$prototype.concat,
      Y = _Array$prototype.map;

  function ee(e) {
    return void 0 === e;
  }

  function te(e) {
    return "function" == typeof e;
  }

  var ne = new WeakMap();

  function ie(e, t) {
    ne.set(e, t);
  }

  var re = function re(e) {
    return ne.get(e) || e;
  };

  function se(e, t) {
    return e.valueIsObservable(t) ? e.getProxy(t) : t;
  }

  function oe(e, t, n) {
    X.call(H(n), V(n)).forEach(function (i) {
      var r = G(n, i);
      r.configurable || (r = ve(e, r, se)), U(t, i, r);
    }), Z(t);
  }

  var ae = /*#__PURE__*/function () {
    function ae(e, t) {
      _classCallCheck(this, ae);

      this.originalTarget = t, this.membrane = e;
    }

    _createClass(ae, [{
      key: "get",
      value: function get(e, t) {
        var n = this.originalTarget,
            i = this.membrane,
            r = n[t],
            s = i.valueObserved;
        return s(n, t), i.getProxy(r);
      }
    }, {
      key: "set",
      value: function set(e, t, n) {
        var i = this.originalTarget,
            r = this.membrane.valueMutated;
        return i[t] !== n ? (i[t] = n, r(i, t)) : "length" === t && M(i) && r(i, t), !0;
      }
    }, {
      key: "deleteProperty",
      value: function deleteProperty(e, t) {
        var n = this.originalTarget,
            i = this.membrane.valueMutated;
        return delete n[t], i(n, t), !0;
      }
    }, {
      key: "apply",
      value: function apply(e, t, n) {}
    }, {
      key: "construct",
      value: function construct(e, t, n) {}
    }, {
      key: "has",
      value: function has(e, t) {
        var n = this.originalTarget,
            i = this.membrane.valueObserved;
        return i(n, t), t in n;
      }
    }, {
      key: "ownKeys",
      value: function ownKeys(e) {
        var t = this.originalTarget;
        return X.call(H(t), V(t));
      }
    }, {
      key: "isExtensible",
      value: function isExtensible(e) {
        var t = K(e);
        if (!t) return t;
        var n = this.originalTarget,
            i = this.membrane,
            r = K(n);
        return r || oe(i, e, n), r;
      }
    }, {
      key: "setPrototypeOf",
      value: function setPrototypeOf(e, t) {}
    }, {
      key: "getPrototypeOf",
      value: function getPrototypeOf(e) {
        var t = this.originalTarget;
        return B(t);
      }
    }, {
      key: "getOwnPropertyDescriptor",
      value: function getOwnPropertyDescriptor(e, t) {
        var n = this.originalTarget,
            i = this.membrane,
            r = this.membrane.valueObserved;
        r(n, t);
        var s = G(n, t);
        if (ee(s)) return s;
        var o = G(e, t);
        return ee(o) ? (s = ve(i, s, se), s.configurable || U(e, t, s), s) : o;
      }
    }, {
      key: "preventExtensions",
      value: function preventExtensions(e) {
        var t = this.originalTarget,
            n = this.membrane;
        return oe(n, e, t), Z(t), !0;
      }
    }, {
      key: "defineProperty",
      value: function defineProperty(e, t, n) {
        var i = this.originalTarget,
            r = this.membrane,
            s = r.valueMutated,
            o = n.configurable;

        if (J.call(n, "writable") && !J.call(n, "value")) {
          var _e9 = G(i, t);

          n.value = _e9.value;
        }

        return U(i, t, function (e) {
          return J.call(e, "value") && (e.value = re(e.value)), e;
        }(n)), !1 === o && U(e, t, ve(r, n, se)), s(i, t), !0;
      }
    }]);

    return ae;
  }();

  function le(e, t) {
    return e.valueIsObservable(t) ? e.getReadOnlyProxy(t) : t;
  }

  var ce = /*#__PURE__*/function () {
    function ce(e, t) {
      _classCallCheck(this, ce);

      this.originalTarget = t, this.membrane = e;
    }

    _createClass(ce, [{
      key: "get",
      value: function get(e, t) {
        var n = this.membrane,
            i = this.originalTarget,
            r = i[t],
            s = n.valueObserved;
        return s(i, t), n.getReadOnlyProxy(r);
      }
    }, {
      key: "set",
      value: function set(e, t, n) {
        return !1;
      }
    }, {
      key: "deleteProperty",
      value: function deleteProperty(e, t) {
        return !1;
      }
    }, {
      key: "apply",
      value: function apply(e, t, n) {}
    }, {
      key: "construct",
      value: function construct(e, t, n) {}
    }, {
      key: "has",
      value: function has(e, t) {
        var n = this.originalTarget,
            i = this.membrane.valueObserved;
        return i(n, t), t in n;
      }
    }, {
      key: "ownKeys",
      value: function ownKeys(e) {
        var t = this.originalTarget;
        return X.call(H(t), V(t));
      }
    }, {
      key: "setPrototypeOf",
      value: function setPrototypeOf(e, t) {}
    }, {
      key: "getOwnPropertyDescriptor",
      value: function getOwnPropertyDescriptor(e, t) {
        var n = this.originalTarget,
            i = this.membrane,
            r = i.valueObserved;
        r(n, t);
        var s = G(n, t);
        if (ee(s)) return s;
        var o = G(e, t);
        return ee(o) ? (s = ve(i, s, le), J.call(s, "set") && (s.set = void 0), s.configurable || U(e, t, s), s) : o;
      }
    }, {
      key: "preventExtensions",
      value: function preventExtensions(e) {
        return !1;
      }
    }, {
      key: "defineProperty",
      value: function defineProperty(e, t, n) {
        return !1;
      }
    }]);

    return ce;
  }();

  function ue(e) {
    var t = void 0;
    return M(e) ? t = [] : "object" == _typeof(e) && (t = {}), t;
  }

  var de = Object.prototype;

  function fe(e) {
    if (null === e) return !1;
    if ("object" != _typeof(e)) return !1;
    if (M(e)) return !0;
    var t = B(e);
    return t === de || null === t || null === B(t);
  }

  var me = function me(e, t) {},
      pe = function pe(e, t) {},
      he = function he(e) {
    return e;
  };

  function ve(e, t, n) {
    var i = t.set,
        r = t.get;
    return J.call(t, "value") ? t.value = n(e, t.value) : (ee(r) || (t.get = function () {
      return n(e, r.call(re(this)));
    }), ee(i) || (t.set = function (t) {
      i.call(re(this), e.unwrapProxy(t));
    })), t;
  }

  var ye = /*#__PURE__*/function () {
    function ye(e) {
      _classCallCheck(this, ye);

      if (this.valueDistortion = he, this.valueMutated = pe, this.valueObserved = me, this.valueIsObservable = fe, this.objectGraph = new WeakMap(), !ee(e)) {
        var _t2 = e.valueDistortion,
            _n3 = e.valueMutated,
            _i4 = e.valueObserved,
            _r3 = e.valueIsObservable;
        this.valueDistortion = te(_t2) ? _t2 : he, this.valueMutated = te(_n3) ? _n3 : pe, this.valueObserved = te(_i4) ? _i4 : me, this.valueIsObservable = te(_r3) ? _r3 : fe;
      }
    }

    _createClass(ye, [{
      key: "getProxy",
      value: function getProxy(e) {
        var t = re(e),
            n = this.valueDistortion(t);

        if (this.valueIsObservable(n)) {
          var _i5 = this.getReactiveState(t, n);

          return _i5.readOnly === e ? e : _i5.reactive;
        }

        return n;
      }
    }, {
      key: "getReadOnlyProxy",
      value: function getReadOnlyProxy(e) {
        e = re(e);
        var t = this.valueDistortion(e);
        return this.valueIsObservable(t) ? this.getReactiveState(e, t).readOnly : t;
      }
    }, {
      key: "unwrapProxy",
      value: function unwrapProxy(e) {
        return re(e);
      }
    }, {
      key: "getReactiveState",
      value: function getReactiveState(e, t) {
        var n = this.objectGraph;
        var i = n.get(t);
        if (i) return i;
        var r = this;
        return i = {
          get reactive() {
            var n = new ae(r, t),
                i = new Proxy(ue(t), n);
            return ie(i, e), U(this, "reactive", {
              value: i
            }), i;
          },

          get readOnly() {
            var n = new ce(r, t),
                i = new Proxy(ue(t), n);
            return ie(i, e), U(this, "readOnly", {
              value: i
            }), i;
          }

        }, n.set(t, i), i;
      }
    }]);

    return ye;
  }();

  var be = /*#__PURE__*/function () {
    function be(e) {
      var _this = this;

      var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;

      _classCallCheck(this, be);

      this.$el = e;
      var n = this.$el.getAttribute("x-data"),
          i = "" === n ? "{}" : n,
          r = this.$el.getAttribute("x-init");
      var s = {
        $el: this.$el
      },
          o = t ? t.$el : this.$el;
      Object.entries(xe.magicProperties).forEach(function (_ref5) {
        var _ref6 = _slicedToArray(_ref5, 2),
            e = _ref6[0],
            t = _ref6[1];

        Object.defineProperty(s, "$" + e, {
          get: function get() {
            return t(o);
          }
        });
      }), this.unobservedData = t ? t.getUnobservedData() : f(e, i, s);

      var _this$wrapDataInObser = this.wrapDataInObservable(this.unobservedData),
          a = _this$wrapDataInObser.membrane,
          l = _this$wrapDataInObser.data;

      var c;
      this.$data = l, this.membrane = a, this.unobservedData.$el = this.$el, this.unobservedData.$refs = this.getRefsProxy(), this.nextTickStack = [], this.unobservedData.$nextTick = function (e) {
        _this.nextTickStack.push(e);
      }, this.watchers = {}, this.unobservedData.$watch = function (e, t) {
        _this.watchers[e] || (_this.watchers[e] = []), _this.watchers[e].push(t);
      }, Object.entries(xe.magicProperties).forEach(function (_ref7) {
        var _ref8 = _slicedToArray(_ref7, 2),
            e = _ref8[0],
            t = _ref8[1];

        Object.defineProperty(_this.unobservedData, "$" + e, {
          get: function get() {
            return t(o, this.$el);
          }
        });
      }), this.showDirectiveStack = [], this.showDirectiveLastElement, t || xe.onBeforeComponentInitializeds.forEach(function (e) {
        return e(_this);
      }), r && !t && (this.pauseReactivity = !0, c = this.evaluateReturnExpression(this.$el, r), this.pauseReactivity = !1), this.initializeElements(this.$el), this.listenForNewElementsToInitialize(), "function" == typeof c && c.call(this.$data), t || setTimeout(function () {
        xe.onComponentInitializeds.forEach(function (e) {
          return e(_this);
        });
      }, 0);
    }

    _createClass(be, [{
      key: "getUnobservedData",
      value: function getUnobservedData() {
        return function (e, t) {
          var n = e.unwrapProxy(t),
              i = {};
          return Object.keys(n).forEach(function (e) {
            ["$el", "$refs", "$nextTick", "$watch"].includes(e) || (i[e] = n[e]);
          }), i;
        }(this.membrane, this.$data);
      }
    }, {
      key: "wrapDataInObservable",
      value: function wrapDataInObservable(e) {
        var t = this;
        var n = c(function () {
          t.updateElements(t.$el);
        }, 0);
        return function (e, t) {
          var n = new ye({
            valueMutated: function valueMutated(e, n) {
              t(e, n);
            }
          });
          return {
            data: n.getProxy(e),
            membrane: n
          };
        }(e, function (e, i) {
          t.watchers[i] ? t.watchers[i].forEach(function (t) {
            return t(e[i]);
          }) : Array.isArray(e) ? Object.keys(t.watchers).forEach(function (n) {
            var r = n.split(".");
            "length" !== i && r.reduce(function (i, r) {
              return Object.is(e, i[r]) && t.watchers[n].forEach(function (t) {
                return t(e);
              }), i[r];
            }, t.unobservedData);
          }) : Object.keys(t.watchers).filter(function (e) {
            return e.includes(".");
          }).forEach(function (n) {
            var r = n.split(".");
            i === r[r.length - 1] && r.reduce(function (r, s) {
              return Object.is(e, r) && t.watchers[n].forEach(function (t) {
                return t(e[i]);
              }), r[s];
            }, t.unobservedData);
          }), t.pauseReactivity || n();
        });
      }
    }, {
      key: "walkAndSkipNestedComponents",
      value: function walkAndSkipNestedComponents(e, t) {
        var _this2 = this;

        var n = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : function () {};
        l(e, function (e) {
          return e.hasAttribute("x-data") && !e.isSameNode(_this2.$el) ? (e.__x || n(e), !1) : t(e);
        });
      }
    }, {
      key: "initializeElements",
      value: function initializeElements(e) {
        var _this3 = this;

        var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : function () {};
        this.walkAndSkipNestedComponents(e, function (e) {
          return void 0 === e.__x_for_key && void 0 === e.__x_inserted_me && void _this3.initializeElement(e, t);
        }, function (e) {
          e.__x = new be(e);
        }), this.executeAndClearRemainingShowDirectiveStack(), this.executeAndClearNextTickStack(e);
      }
    }, {
      key: "initializeElement",
      value: function initializeElement(e, t) {
        e.hasAttribute("class") && h(e, this).length > 0 && (e.__x_original_classes = b(e.getAttribute("class"))), this.registerListeners(e, t), this.resolveBoundAttributes(e, !0, t);
      }
    }, {
      key: "updateElements",
      value: function updateElements(e) {
        var _this4 = this;

        var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : function () {};
        this.walkAndSkipNestedComponents(e, function (e) {
          if (void 0 !== e.__x_for_key && !e.isSameNode(_this4.$el)) return !1;

          _this4.updateElement(e, t);
        }, function (e) {
          e.__x = new be(e);
        }), this.executeAndClearRemainingShowDirectiveStack(), this.executeAndClearNextTickStack(e);
      }
    }, {
      key: "executeAndClearNextTickStack",
      value: function executeAndClearNextTickStack(e) {
        var _this5 = this;

        e === this.$el && this.nextTickStack.length > 0 && requestAnimationFrame(function () {
          for (; _this5.nextTickStack.length > 0;) {
            _this5.nextTickStack.shift()();
          }
        });
      }
    }, {
      key: "executeAndClearRemainingShowDirectiveStack",
      value: function executeAndClearRemainingShowDirectiveStack() {
        this.showDirectiveStack.reverse().map(function (e) {
          return new Promise(function (t, n) {
            e(t, n);
          });
        }).reduce(function (e, t) {
          return e.then(function () {
            return t.then(function (e) {
              e();
            });
          });
        }, Promise.resolve(function () {}))["catch"](function (e) {
          if (e !== _) throw e;
        }), this.showDirectiveStack = [], this.showDirectiveLastElement = void 0;
      }
    }, {
      key: "updateElement",
      value: function updateElement(e, t) {
        this.resolveBoundAttributes(e, !1, t);
      }
    }, {
      key: "registerListeners",
      value: function registerListeners(e, t) {
        var _this6 = this;

        h(e, this).forEach(function (_ref9) {
          var i = _ref9.type,
              r = _ref9.value,
              s = _ref9.modifiers,
              o = _ref9.expression;

          switch (i) {
            case "on":
              N(_this6, e, r, s, o, t);
              break;

            case "model":
              !function (e, t, i, r, s) {
                var o = "select" === t.tagName.toLowerCase() || ["checkbox", "radio"].includes(t.type) || i.includes("lazy") ? "change" : "input";
                N(e, t, o, i, "".concat(r, " = rightSideOfExpression($event, ").concat(r, ")"), function () {
                  return n(n({}, s()), {}, {
                    rightSideOfExpression: F(t, i, r)
                  });
                });
              }(_this6, e, s, o, t);
          }
        });
      }
    }, {
      key: "resolveBoundAttributes",
      value: function resolveBoundAttributes(e) {
        var _this7 = this;

        var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : !1;
        var n = arguments.length > 2 ? arguments[2] : undefined;
        var i = h(e, this);
        i.forEach(function (_ref10) {
          var r = _ref10.type,
              s = _ref10.value,
              a = _ref10.modifiers,
              l = _ref10.expression;

          switch (r) {
            case "model":
              T(_this7, e, "value", l, n, r, a);
              break;

            case "bind":
              if ("template" === e.tagName.toLowerCase() && "key" === s) return;
              T(_this7, e, s, l, n, r, a);
              break;

            case "text":
              var c = _this7.evaluateReturnExpression(e, l, n);

              !function (e, t, n) {
                void 0 === t && n.match(/\./) && (t = ""), e.textContent = t;
              }(e, c, l);
              break;

            case "html":
              !function (e, t, n, i) {
                t.innerHTML = e.evaluateReturnExpression(t, n, i);
              }(_this7, e, l, n);
              break;

            case "show":
              c = _this7.evaluateReturnExpression(e, l, n);
              !function (e, t, n, i) {
                var r = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : !1;

                var s = function s() {
                  t.style.display = "none", t.__x_is_shown = !1;
                },
                    o = function o() {
                  1 === t.style.length && "none" === t.style.display ? t.removeAttribute("style") : t.style.removeProperty("display"), t.__x_is_shown = !0;
                };

                if (!0 === r) return void (n ? o() : s());

                var a = function a(i, r) {
                  n ? (("none" === t.style.display || t.__x_transition) && w(t, function () {
                    o();
                  }, r, e), i(function () {})) : "none" !== t.style.display ? E(t, function () {
                    i(function () {
                      s();
                    });
                  }, r, e) : i(function () {});
                };

                i.includes("immediate") ? a(function (e) {
                  return e();
                }, function () {}) : (e.showDirectiveLastElement && !e.showDirectiveLastElement.contains(t) && e.executeAndClearRemainingShowDirectiveStack(), e.showDirectiveStack.push(a), e.showDirectiveLastElement = t);
              }(_this7, e, c, a, t);
              break;

            case "if":
              if (i.some(function (e) {
                return "for" === e.type;
              })) return;
              c = _this7.evaluateReturnExpression(e, l, n);
              !function (e, t, n, i, r) {
                o(t, "x-if");
                var s = t.nextElementSibling && !0 === t.nextElementSibling.__x_inserted_me;
                if (!n || s && !t.__x_transition) !n && s && E(t.nextElementSibling, function () {
                  t.nextElementSibling.remove();
                }, function () {}, e, i);else {
                  var _n4 = document.importNode(t.content, !0);

                  t.parentElement.insertBefore(_n4, t.nextElementSibling), w(t.nextElementSibling, function () {}, function () {}, e, i), e.initializeElements(t.nextElementSibling, r), t.nextElementSibling.__x_inserted_me = !0;
                }
              }(_this7, e, c, t, n);
              break;

            case "for":
              D(_this7, e, l, t, n);
              break;

            case "cloak":
              e.removeAttribute("x-cloak");
          }
        });
      }
    }, {
      key: "evaluateReturnExpression",
      value: function evaluateReturnExpression(e, t) {
        var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : function () {};
        return f(e, t, this.$data, n(n({}, i()), {}, {
          $dispatch: this.getDispatchFunction(e)
        }));
      }
    }, {
      key: "evaluateCommandExpression",
      value: function evaluateCommandExpression(e, t) {
        var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : function () {};
        return function (e, t, n) {
          var i = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : {};
          return d(function () {
            if ("function" == typeof t) return Promise.resolve(t.call(n, i.$event));
            var e = Function;

            if (e = Object.getPrototypeOf( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
              return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
                while (1) {
                  switch (_context.prev = _context.next) {
                    case 0:
                    case "end":
                      return _context.stop();
                  }
                }
              }, _callee);
            }))).constructor, Object.keys(n).includes(t)) {
              var _e10 = new Function(["dataContext"].concat(_toConsumableArray(Object.keys(i))), "with(dataContext) { return ".concat(t, " }")).apply(void 0, [n].concat(_toConsumableArray(Object.values(i))));

              return "function" == typeof _e10 ? Promise.resolve(_e10.call(n, i.$event)) : Promise.resolve();
            }

            return Promise.resolve(new e(["dataContext"].concat(_toConsumableArray(Object.keys(i))), "with(dataContext) { ".concat(t, " }")).apply(void 0, [n].concat(_toConsumableArray(Object.values(i)))));
          }, {
            el: e,
            expression: t
          });
        }(e, t, this.$data, n(n({}, i()), {}, {
          $dispatch: this.getDispatchFunction(e)
        }));
      }
    }, {
      key: "getDispatchFunction",
      value: function getDispatchFunction(e) {
        return function (t) {
          var n = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
          e.dispatchEvent(new CustomEvent(t, {
            detail: n,
            bubbles: !0
          }));
        };
      }
    }, {
      key: "listenForNewElementsToInitialize",
      value: function listenForNewElementsToInitialize() {
        var _this8 = this;

        var e = this.$el;
        new MutationObserver(function (e) {
          for (var _t3 = 0; _t3 < e.length; _t3++) {
            var _n5 = e[_t3].target.closest("[x-data]");

            if (_n5 && _n5.isSameNode(_this8.$el)) {
              if ("attributes" === e[_t3].type && "x-data" === e[_t3].attributeName) {
                (function () {
                  var n = e[_t3].target.getAttribute("x-data") || "{}",
                      i = f(_this8.$el, n, {
                    $el: _this8.$el
                  });
                  Object.keys(i).forEach(function (e) {
                    _this8.$data[e] !== i[e] && (_this8.$data[e] = i[e]);
                  });
                })();
              }

              e[_t3].addedNodes.length > 0 && e[_t3].addedNodes.forEach(function (e) {
                1 !== e.nodeType || e.__x_inserted_me || (!e.matches("[x-data]") || e.__x ? _this8.initializeElements(e) : e.__x = new be(e));
              });
            }
          }
        }).observe(e, {
          childList: !0,
          attributes: !0,
          subtree: !0
        });
      }
    }, {
      key: "getRefsProxy",
      value: function getRefsProxy() {
        var e = this;
        return new Proxy({}, {
          get: function get(t, n) {
            return "$isAlpineProxy" === n || (e.walkAndSkipNestedComponents(e.$el, function (e) {
              e.hasAttribute("x-ref") && e.getAttribute("x-ref") === n && (i = e);
            }), i);
            var i;
          }
        });
      }
    }]);

    return be;
  }();

  var xe = {
    version: "2.8.0",
    pauseMutationObserver: !1,
    magicProperties: {},
    onComponentInitializeds: [],
    onBeforeComponentInitializeds: [],
    ignoreFocusedForValueBinding: !1,
    start: function () {
      var _start = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2() {
        var _this9 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.t0 = r();

                if (_context2.t0) {
                  _context2.next = 4;
                  break;
                }

                _context2.next = 4;
                return new Promise(function (e) {
                  "loading" == document.readyState ? document.addEventListener("DOMContentLoaded", e) : e();
                });

              case 4:
                this.discoverComponents(function (e) {
                  _this9.initializeComponent(e);
                });
                document.addEventListener("turbolinks:load", function () {
                  _this9.discoverUninitializedComponents(function (e) {
                    _this9.initializeComponent(e);
                  });
                });
                this.listenForNewUninitializedComponentsAtRunTime();

              case 7:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this);
      }));

      function start() {
        return _start.apply(this, arguments);
      }

      return start;
    }(),
    discoverComponents: function discoverComponents(e) {
      document.querySelectorAll("[x-data]").forEach(function (t) {
        e(t);
      });
    },
    discoverUninitializedComponents: function discoverUninitializedComponents(e) {
      var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      var n = (t || document).querySelectorAll("[x-data]");
      Array.from(n).filter(function (e) {
        return void 0 === e.__x;
      }).forEach(function (t) {
        e(t);
      });
    },
    listenForNewUninitializedComponentsAtRunTime: function listenForNewUninitializedComponentsAtRunTime() {
      var _this10 = this;

      var e = document.querySelector("body");
      new MutationObserver(function (e) {
        if (!_this10.pauseMutationObserver) for (var _t4 = 0; _t4 < e.length; _t4++) {
          e[_t4].addedNodes.length > 0 && e[_t4].addedNodes.forEach(function (e) {
            1 === e.nodeType && (e.parentElement && e.parentElement.closest("[x-data]") || _this10.discoverUninitializedComponents(function (e) {
              _this10.initializeComponent(e);
            }, e.parentElement));
          });
        }
      }).observe(e, {
        childList: !0,
        attributes: !0,
        subtree: !0
      });
    },
    initializeComponent: function initializeComponent(e) {
      if (!e.__x) try {
        e.__x = new be(e);
      } catch (e) {
        setTimeout(function () {
          throw e;
        }, 0);
      }
    },
    clone: function clone(e, t) {
      t.__x || (t.__x = new be(t, e));
    },
    addMagicProperty: function addMagicProperty(e, t) {
      this.magicProperties[e] = t;
    },
    onComponentInitialized: function onComponentInitialized(e) {
      this.onComponentInitializeds.push(e);
    },
    onBeforeComponentInitialized: function onBeforeComponentInitialized(e) {
      this.onBeforeComponentInitializeds.push(e);
    }
  };
  return r() || (window.Alpine = xe, window.deferLoadingAlpine ? window.deferLoadingAlpine(function () {
    window.Alpine.start();
  }) : window.Alpine.start()), xe;
});

/***/ }),

/***/ "./node_modules/regenerator-runtime/runtime.js":
/*!*****************************************************!*\
  !*** ./node_modules/regenerator-runtime/runtime.js ***!
  \*****************************************************/
/***/ ((module) => {

/**
 * Copyright (c) 2014-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

var runtime = (function (exports) {
  "use strict";

  var Op = Object.prototype;
  var hasOwn = Op.hasOwnProperty;
  var undefined; // More compressible than void 0.
  var $Symbol = typeof Symbol === "function" ? Symbol : {};
  var iteratorSymbol = $Symbol.iterator || "@@iterator";
  var asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator";
  var toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag";

  function define(obj, key, value) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
    return obj[key];
  }
  try {
    // IE 8 has a broken Object.defineProperty that only works on DOM objects.
    define({}, "");
  } catch (err) {
    define = function(obj, key, value) {
      return obj[key] = value;
    };
  }

  function wrap(innerFn, outerFn, self, tryLocsList) {
    // If outerFn provided and outerFn.prototype is a Generator, then outerFn.prototype instanceof Generator.
    var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator;
    var generator = Object.create(protoGenerator.prototype);
    var context = new Context(tryLocsList || []);

    // The ._invoke method unifies the implementations of the .next,
    // .throw, and .return methods.
    generator._invoke = makeInvokeMethod(innerFn, self, context);

    return generator;
  }
  exports.wrap = wrap;

  // Try/catch helper to minimize deoptimizations. Returns a completion
  // record like context.tryEntries[i].completion. This interface could
  // have been (and was previously) designed to take a closure to be
  // invoked without arguments, but in all the cases we care about we
  // already have an existing method we want to call, so there's no need
  // to create a new function object. We can even get away with assuming
  // the method takes exactly one argument, since that happens to be true
  // in every case, so we don't have to touch the arguments object. The
  // only additional allocation required is the completion record, which
  // has a stable shape and so hopefully should be cheap to allocate.
  function tryCatch(fn, obj, arg) {
    try {
      return { type: "normal", arg: fn.call(obj, arg) };
    } catch (err) {
      return { type: "throw", arg: err };
    }
  }

  var GenStateSuspendedStart = "suspendedStart";
  var GenStateSuspendedYield = "suspendedYield";
  var GenStateExecuting = "executing";
  var GenStateCompleted = "completed";

  // Returning this object from the innerFn has the same effect as
  // breaking out of the dispatch switch statement.
  var ContinueSentinel = {};

  // Dummy constructor functions that we use as the .constructor and
  // .constructor.prototype properties for functions that return Generator
  // objects. For full spec compliance, you may wish to configure your
  // minifier not to mangle the names of these two functions.
  function Generator() {}
  function GeneratorFunction() {}
  function GeneratorFunctionPrototype() {}

  // This is a polyfill for %IteratorPrototype% for environments that
  // don't natively support it.
  var IteratorPrototype = {};
  define(IteratorPrototype, iteratorSymbol, function () {
    return this;
  });

  var getProto = Object.getPrototypeOf;
  var NativeIteratorPrototype = getProto && getProto(getProto(values([])));
  if (NativeIteratorPrototype &&
      NativeIteratorPrototype !== Op &&
      hasOwn.call(NativeIteratorPrototype, iteratorSymbol)) {
    // This environment has a native %IteratorPrototype%; use it instead
    // of the polyfill.
    IteratorPrototype = NativeIteratorPrototype;
  }

  var Gp = GeneratorFunctionPrototype.prototype =
    Generator.prototype = Object.create(IteratorPrototype);
  GeneratorFunction.prototype = GeneratorFunctionPrototype;
  define(Gp, "constructor", GeneratorFunctionPrototype);
  define(GeneratorFunctionPrototype, "constructor", GeneratorFunction);
  GeneratorFunction.displayName = define(
    GeneratorFunctionPrototype,
    toStringTagSymbol,
    "GeneratorFunction"
  );

  // Helper for defining the .next, .throw, and .return methods of the
  // Iterator interface in terms of a single ._invoke method.
  function defineIteratorMethods(prototype) {
    ["next", "throw", "return"].forEach(function(method) {
      define(prototype, method, function(arg) {
        return this._invoke(method, arg);
      });
    });
  }

  exports.isGeneratorFunction = function(genFun) {
    var ctor = typeof genFun === "function" && genFun.constructor;
    return ctor
      ? ctor === GeneratorFunction ||
        // For the native GeneratorFunction constructor, the best we can
        // do is to check its .name property.
        (ctor.displayName || ctor.name) === "GeneratorFunction"
      : false;
  };

  exports.mark = function(genFun) {
    if (Object.setPrototypeOf) {
      Object.setPrototypeOf(genFun, GeneratorFunctionPrototype);
    } else {
      genFun.__proto__ = GeneratorFunctionPrototype;
      define(genFun, toStringTagSymbol, "GeneratorFunction");
    }
    genFun.prototype = Object.create(Gp);
    return genFun;
  };

  // Within the body of any async function, `await x` is transformed to
  // `yield regeneratorRuntime.awrap(x)`, so that the runtime can test
  // `hasOwn.call(value, "__await")` to determine if the yielded value is
  // meant to be awaited.
  exports.awrap = function(arg) {
    return { __await: arg };
  };

  function AsyncIterator(generator, PromiseImpl) {
    function invoke(method, arg, resolve, reject) {
      var record = tryCatch(generator[method], generator, arg);
      if (record.type === "throw") {
        reject(record.arg);
      } else {
        var result = record.arg;
        var value = result.value;
        if (value &&
            typeof value === "object" &&
            hasOwn.call(value, "__await")) {
          return PromiseImpl.resolve(value.__await).then(function(value) {
            invoke("next", value, resolve, reject);
          }, function(err) {
            invoke("throw", err, resolve, reject);
          });
        }

        return PromiseImpl.resolve(value).then(function(unwrapped) {
          // When a yielded Promise is resolved, its final value becomes
          // the .value of the Promise<{value,done}> result for the
          // current iteration.
          result.value = unwrapped;
          resolve(result);
        }, function(error) {
          // If a rejected Promise was yielded, throw the rejection back
          // into the async generator function so it can be handled there.
          return invoke("throw", error, resolve, reject);
        });
      }
    }

    var previousPromise;

    function enqueue(method, arg) {
      function callInvokeWithMethodAndArg() {
        return new PromiseImpl(function(resolve, reject) {
          invoke(method, arg, resolve, reject);
        });
      }

      return previousPromise =
        // If enqueue has been called before, then we want to wait until
        // all previous Promises have been resolved before calling invoke,
        // so that results are always delivered in the correct order. If
        // enqueue has not been called before, then it is important to
        // call invoke immediately, without waiting on a callback to fire,
        // so that the async generator function has the opportunity to do
        // any necessary setup in a predictable way. This predictability
        // is why the Promise constructor synchronously invokes its
        // executor callback, and why async functions synchronously
        // execute code before the first await. Since we implement simple
        // async functions in terms of async generators, it is especially
        // important to get this right, even though it requires care.
        previousPromise ? previousPromise.then(
          callInvokeWithMethodAndArg,
          // Avoid propagating failures to Promises returned by later
          // invocations of the iterator.
          callInvokeWithMethodAndArg
        ) : callInvokeWithMethodAndArg();
    }

    // Define the unified helper method that is used to implement .next,
    // .throw, and .return (see defineIteratorMethods).
    this._invoke = enqueue;
  }

  defineIteratorMethods(AsyncIterator.prototype);
  define(AsyncIterator.prototype, asyncIteratorSymbol, function () {
    return this;
  });
  exports.AsyncIterator = AsyncIterator;

  // Note that simple async functions are implemented on top of
  // AsyncIterator objects; they just return a Promise for the value of
  // the final result produced by the iterator.
  exports.async = function(innerFn, outerFn, self, tryLocsList, PromiseImpl) {
    if (PromiseImpl === void 0) PromiseImpl = Promise;

    var iter = new AsyncIterator(
      wrap(innerFn, outerFn, self, tryLocsList),
      PromiseImpl
    );

    return exports.isGeneratorFunction(outerFn)
      ? iter // If outerFn is a generator, return the full iterator.
      : iter.next().then(function(result) {
          return result.done ? result.value : iter.next();
        });
  };

  function makeInvokeMethod(innerFn, self, context) {
    var state = GenStateSuspendedStart;

    return function invoke(method, arg) {
      if (state === GenStateExecuting) {
        throw new Error("Generator is already running");
      }

      if (state === GenStateCompleted) {
        if (method === "throw") {
          throw arg;
        }

        // Be forgiving, per 25.3.3.3.3 of the spec:
        // https://people.mozilla.org/~jorendorff/es6-draft.html#sec-generatorresume
        return doneResult();
      }

      context.method = method;
      context.arg = arg;

      while (true) {
        var delegate = context.delegate;
        if (delegate) {
          var delegateResult = maybeInvokeDelegate(delegate, context);
          if (delegateResult) {
            if (delegateResult === ContinueSentinel) continue;
            return delegateResult;
          }
        }

        if (context.method === "next") {
          // Setting context._sent for legacy support of Babel's
          // function.sent implementation.
          context.sent = context._sent = context.arg;

        } else if (context.method === "throw") {
          if (state === GenStateSuspendedStart) {
            state = GenStateCompleted;
            throw context.arg;
          }

          context.dispatchException(context.arg);

        } else if (context.method === "return") {
          context.abrupt("return", context.arg);
        }

        state = GenStateExecuting;

        var record = tryCatch(innerFn, self, context);
        if (record.type === "normal") {
          // If an exception is thrown from innerFn, we leave state ===
          // GenStateExecuting and loop back for another invocation.
          state = context.done
            ? GenStateCompleted
            : GenStateSuspendedYield;

          if (record.arg === ContinueSentinel) {
            continue;
          }

          return {
            value: record.arg,
            done: context.done
          };

        } else if (record.type === "throw") {
          state = GenStateCompleted;
          // Dispatch the exception by looping back around to the
          // context.dispatchException(context.arg) call above.
          context.method = "throw";
          context.arg = record.arg;
        }
      }
    };
  }

  // Call delegate.iterator[context.method](context.arg) and handle the
  // result, either by returning a { value, done } result from the
  // delegate iterator, or by modifying context.method and context.arg,
  // setting context.delegate to null, and returning the ContinueSentinel.
  function maybeInvokeDelegate(delegate, context) {
    var method = delegate.iterator[context.method];
    if (method === undefined) {
      // A .throw or .return when the delegate iterator has no .throw
      // method always terminates the yield* loop.
      context.delegate = null;

      if (context.method === "throw") {
        // Note: ["return"] must be used for ES3 parsing compatibility.
        if (delegate.iterator["return"]) {
          // If the delegate iterator has a return method, give it a
          // chance to clean up.
          context.method = "return";
          context.arg = undefined;
          maybeInvokeDelegate(delegate, context);

          if (context.method === "throw") {
            // If maybeInvokeDelegate(context) changed context.method from
            // "return" to "throw", let that override the TypeError below.
            return ContinueSentinel;
          }
        }

        context.method = "throw";
        context.arg = new TypeError(
          "The iterator does not provide a 'throw' method");
      }

      return ContinueSentinel;
    }

    var record = tryCatch(method, delegate.iterator, context.arg);

    if (record.type === "throw") {
      context.method = "throw";
      context.arg = record.arg;
      context.delegate = null;
      return ContinueSentinel;
    }

    var info = record.arg;

    if (! info) {
      context.method = "throw";
      context.arg = new TypeError("iterator result is not an object");
      context.delegate = null;
      return ContinueSentinel;
    }

    if (info.done) {
      // Assign the result of the finished delegate to the temporary
      // variable specified by delegate.resultName (see delegateYield).
      context[delegate.resultName] = info.value;

      // Resume execution at the desired location (see delegateYield).
      context.next = delegate.nextLoc;

      // If context.method was "throw" but the delegate handled the
      // exception, let the outer generator proceed normally. If
      // context.method was "next", forget context.arg since it has been
      // "consumed" by the delegate iterator. If context.method was
      // "return", allow the original .return call to continue in the
      // outer generator.
      if (context.method !== "return") {
        context.method = "next";
        context.arg = undefined;
      }

    } else {
      // Re-yield the result returned by the delegate method.
      return info;
    }

    // The delegate iterator is finished, so forget it and continue with
    // the outer generator.
    context.delegate = null;
    return ContinueSentinel;
  }

  // Define Generator.prototype.{next,throw,return} in terms of the
  // unified ._invoke helper method.
  defineIteratorMethods(Gp);

  define(Gp, toStringTagSymbol, "Generator");

  // A Generator should always return itself as the iterator object when the
  // @@iterator function is called on it. Some browsers' implementations of the
  // iterator prototype chain incorrectly implement this, causing the Generator
  // object to not be returned from this call. This ensures that doesn't happen.
  // See https://github.com/facebook/regenerator/issues/274 for more details.
  define(Gp, iteratorSymbol, function() {
    return this;
  });

  define(Gp, "toString", function() {
    return "[object Generator]";
  });

  function pushTryEntry(locs) {
    var entry = { tryLoc: locs[0] };

    if (1 in locs) {
      entry.catchLoc = locs[1];
    }

    if (2 in locs) {
      entry.finallyLoc = locs[2];
      entry.afterLoc = locs[3];
    }

    this.tryEntries.push(entry);
  }

  function resetTryEntry(entry) {
    var record = entry.completion || {};
    record.type = "normal";
    delete record.arg;
    entry.completion = record;
  }

  function Context(tryLocsList) {
    // The root entry object (effectively a try statement without a catch
    // or a finally block) gives us a place to store values thrown from
    // locations where there is no enclosing try statement.
    this.tryEntries = [{ tryLoc: "root" }];
    tryLocsList.forEach(pushTryEntry, this);
    this.reset(true);
  }

  exports.keys = function(object) {
    var keys = [];
    for (var key in object) {
      keys.push(key);
    }
    keys.reverse();

    // Rather than returning an object with a next method, we keep
    // things simple and return the next function itself.
    return function next() {
      while (keys.length) {
        var key = keys.pop();
        if (key in object) {
          next.value = key;
          next.done = false;
          return next;
        }
      }

      // To avoid creating an additional object, we just hang the .value
      // and .done properties off the next function object itself. This
      // also ensures that the minifier will not anonymize the function.
      next.done = true;
      return next;
    };
  };

  function values(iterable) {
    if (iterable) {
      var iteratorMethod = iterable[iteratorSymbol];
      if (iteratorMethod) {
        return iteratorMethod.call(iterable);
      }

      if (typeof iterable.next === "function") {
        return iterable;
      }

      if (!isNaN(iterable.length)) {
        var i = -1, next = function next() {
          while (++i < iterable.length) {
            if (hasOwn.call(iterable, i)) {
              next.value = iterable[i];
              next.done = false;
              return next;
            }
          }

          next.value = undefined;
          next.done = true;

          return next;
        };

        return next.next = next;
      }
    }

    // Return an iterator with no values.
    return { next: doneResult };
  }
  exports.values = values;

  function doneResult() {
    return { value: undefined, done: true };
  }

  Context.prototype = {
    constructor: Context,

    reset: function(skipTempReset) {
      this.prev = 0;
      this.next = 0;
      // Resetting context._sent for legacy support of Babel's
      // function.sent implementation.
      this.sent = this._sent = undefined;
      this.done = false;
      this.delegate = null;

      this.method = "next";
      this.arg = undefined;

      this.tryEntries.forEach(resetTryEntry);

      if (!skipTempReset) {
        for (var name in this) {
          // Not sure about the optimal order of these conditions:
          if (name.charAt(0) === "t" &&
              hasOwn.call(this, name) &&
              !isNaN(+name.slice(1))) {
            this[name] = undefined;
          }
        }
      }
    },

    stop: function() {
      this.done = true;

      var rootEntry = this.tryEntries[0];
      var rootRecord = rootEntry.completion;
      if (rootRecord.type === "throw") {
        throw rootRecord.arg;
      }

      return this.rval;
    },

    dispatchException: function(exception) {
      if (this.done) {
        throw exception;
      }

      var context = this;
      function handle(loc, caught) {
        record.type = "throw";
        record.arg = exception;
        context.next = loc;

        if (caught) {
          // If the dispatched exception was caught by a catch block,
          // then let that catch block handle the exception normally.
          context.method = "next";
          context.arg = undefined;
        }

        return !! caught;
      }

      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        var record = entry.completion;

        if (entry.tryLoc === "root") {
          // Exception thrown outside of any try block that could handle
          // it, so set the completion value of the entire function to
          // throw the exception.
          return handle("end");
        }

        if (entry.tryLoc <= this.prev) {
          var hasCatch = hasOwn.call(entry, "catchLoc");
          var hasFinally = hasOwn.call(entry, "finallyLoc");

          if (hasCatch && hasFinally) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            } else if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else if (hasCatch) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            }

          } else if (hasFinally) {
            if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else {
            throw new Error("try statement without catch or finally");
          }
        }
      }
    },

    abrupt: function(type, arg) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc <= this.prev &&
            hasOwn.call(entry, "finallyLoc") &&
            this.prev < entry.finallyLoc) {
          var finallyEntry = entry;
          break;
        }
      }

      if (finallyEntry &&
          (type === "break" ||
           type === "continue") &&
          finallyEntry.tryLoc <= arg &&
          arg <= finallyEntry.finallyLoc) {
        // Ignore the finally entry if control is not jumping to a
        // location outside the try/catch block.
        finallyEntry = null;
      }

      var record = finallyEntry ? finallyEntry.completion : {};
      record.type = type;
      record.arg = arg;

      if (finallyEntry) {
        this.method = "next";
        this.next = finallyEntry.finallyLoc;
        return ContinueSentinel;
      }

      return this.complete(record);
    },

    complete: function(record, afterLoc) {
      if (record.type === "throw") {
        throw record.arg;
      }

      if (record.type === "break" ||
          record.type === "continue") {
        this.next = record.arg;
      } else if (record.type === "return") {
        this.rval = this.arg = record.arg;
        this.method = "return";
        this.next = "end";
      } else if (record.type === "normal" && afterLoc) {
        this.next = afterLoc;
      }

      return ContinueSentinel;
    },

    finish: function(finallyLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.finallyLoc === finallyLoc) {
          this.complete(entry.completion, entry.afterLoc);
          resetTryEntry(entry);
          return ContinueSentinel;
        }
      }
    },

    "catch": function(tryLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc === tryLoc) {
          var record = entry.completion;
          if (record.type === "throw") {
            var thrown = record.arg;
            resetTryEntry(entry);
          }
          return thrown;
        }
      }

      // The context.catch method must only be called with a location
      // argument that corresponds to a known catch block.
      throw new Error("illegal catch attempt");
    },

    delegateYield: function(iterable, resultName, nextLoc) {
      this.delegate = {
        iterator: values(iterable),
        resultName: resultName,
        nextLoc: nextLoc
      };

      if (this.method === "next") {
        // Deliberately forget the last sent value so that we don't
        // accidentally pass it on to the delegate.
        this.arg = undefined;
      }

      return ContinueSentinel;
    }
  };

  // Regardless of whether this script is executing as a CommonJS module
  // or not, return the runtime object so that we can declare the variable
  // regeneratorRuntime in the outer scope, which allows this module to be
  // injected easily by `bin/regenerator --include-runtime script.js`.
  return exports;

}(
  // If this script is executing as a CommonJS module, use module.exports
  // as the regeneratorRuntime namespace. Otherwise create a new empty
  // object. Either way, the resulting object will be used to initialize
  // the regeneratorRuntime variable at the top of this file.
   true ? module.exports : 0
));

try {
  regeneratorRuntime = runtime;
} catch (accidentalStrictMode) {
  // This module should not be running in strict mode, so the above
  // assignment should always work unless something is misconfigured. Just
  // in case runtime.js accidentally runs in strict mode, in modern engines
  // we can explicitly access globalThis. In older engines we can escape
  // strict mode using a global Function call. This could conceivably fail
  // if a Content Security Policy forbids using Function, but in that case
  // the proper solution is to fix the accidental strict mode problem. If
  // you've misconfigured your bundler to force strict mode and applied a
  // CSP to forbid Function, and you're not willing to fix either of those
  // problems, please detail your unique predicament in a GitHub issue.
  if (typeof globalThis === "object") {
    globalThis.regeneratorRuntime = runtime;
  } else {
    Function("r", "regeneratorRuntime = r")(runtime);
  }
}


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			loaded: false,
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/amd options */
/******/ 	(() => {
/******/ 		__webpack_require__.amdO = {};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/harmony module decorator */
/******/ 	(() => {
/******/ 		__webpack_require__.hmd = (module) => {
/******/ 			module = Object.create(module);
/******/ 			if (!module.children) module.children = [];
/******/ 			Object.defineProperty(module, 'exports', {
/******/ 				enumerable: true,
/******/ 				set: () => {
/******/ 					throw new Error('ES Modules may not assign module.exports or exports.*, Use ESM export syntax, instead: ' + module.id);
/******/ 				}
/******/ 			});
/******/ 			return module;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*******************************!*\
  !*** ./resources/fejs/app.js ***!
  \*******************************/
__webpack_require__(/*! ./alpine.min.js */ "./resources/fejs/alpine.min.js"); // require("./alpine-clipboard.umd");
// require('./splide.js');
// window.ImageTool = require("@editorjs/image");
// window.List = require("@editorjs/list");
// window.Header = require("@editorjs/header");
// window.Warning = require("@editorjs/warning");
// window.InlineCode = require("@editorjs/inline-code");
// window.Underline = require("@editorjs/underline");
// window.Maker = require("@editorjs/marker");
// window.RawTool = require("@editorjs/raw");
// window.Delimiter = require("@editorjs/delimiter");
// window.CodeTool = require("@editorjs/code");
})();

/******/ })()
;