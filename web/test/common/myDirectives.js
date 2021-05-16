var financeDirectives = angular.module('myDirectives', []);

financeDirectives.directive('currencyMask', function () {
    return {
        restrict: 'A',
        require: 'ngModel',
        link: function (scope, element, attrs, ngModelController) {
            // Run formatting on keyup
            var testingValidity;
            var numberWithCommas = function (value, addExtraZero, value2) {
                if (addExtraZero == undefined)
                    addExtraZero = false
                value = value.toString();
                value = value.replace(/[^0-9\.-]/g, "");
                value2 = value.indexOf("-");
                if (value2 == 0 || value2 > 0) {
                    var theBigOne = true;
                    var parts = value.split('.');
                    parts[0] = parts[0].replace(/\d{1,3}(?=(\d{3})+(?!\d))/g, "$&,");
                    //value = value.replace(/[^0-9\.]/g, "");
                    if (parts[1] && parts[1].length > 2) {
                        parts[1] = parts[1].substring(0, 2);
                    }
                    if (addExtraZero && parts[1] && (parts[1].length === 1)) {
                        parts[1] = parts[1] + "0"
                    }
                    else {
                        var ending = '($' + parts.join(".") + ')';
                        ending = ending.replace('-', '');
                        scope.getTrueValue();
                        if (ending == "") {
                            scope.getFalseValue();
                            return '$' + parts.join(".");
                        }
                        else {
                            return ending;
                        }
                    }
                }
                else {
                    var parts = value.split('.');
                    parts[0] = parts[0].replace(/\d{1,3}(?=(\d{3})+(?!\d))/g, "$&,");
                    if (parts[1] && parts[1].length > 2) {
                        parts[1] = parts[1].substring(0, 2);
                    }
                    if (addExtraZero && parts[1] && (parts[1].length === 1)) {
                        parts[1] = parts[1] + "0"
                    }
                    if (scope.testingValidity == true) {
                        var ending = '($' + parts.join(".") + ')';
                        return ending;
                    }
                    else {
                        return '$' + parts.join(".");
                    }
                }
            };
            var applyFormatting = function () {
                var value = element.val();
                var original = value;
                if (!value || value.length == 0) { return }
                value = numberWithCommas(value);
                if (value != original) {
                    element.val(value);
                    element.triggerHandler('input')
                }
            };
            element.bind('keyup', function (e) {
                var keycode = e.keyCode;
                var isTextInputKey =
                  (keycode > 47 && keycode < 58) || // number keys
                  keycode == 32 || keycode == 8 || // spacebar or backspace
                  (keycode > 64 && keycode < 91) || // letter keys
                  (keycode > 95 && keycode < 112) || // numpad keys
                  (keycode > 185 && keycode < 193) || // ;=,-./` (in order)
                  (keycode > 218 && keycode < 223);   // [\]' (in order)
                if (isTextInputKey) {
                    applyFormatting();
                }
            });
            ngModelController.$parsers.push(function (value) {
                if (!value || value.length == 0) {
                    return value;
                }
                value = value.toString();
                value = value.replace(/[^0-9\.]/g, "");
                return value;
            });
            ngModelController.$formatters.push(function (value) {
                if (!value || value.length == 0) {
                    return value;
                }
                value = numberWithCommas(value, true);
                return value;
            });
        }
    };
}).directive('onlyNumbers', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (text) {
                    var transformedInput = text.replace(/[^0-9.]/g, '');

                    if (transformedInput !== text) {
                        ngModelCtrl.$setViewValue(transformedInput);
                        ngModelCtrl.$render();
                    }
                    return transformedInput;
                }
                return undefined;
            }
            ngModelCtrl.$parsers.push(fromUser);
        }
    };
}).directive('thousandSeparator', ['$timeout', function ($timeout) {
    return {
        require: 'ngModel',
        link: function (scope, element, attrs, controller) {
            var sep = attrs.thousandSeparator || ".";
            var model = attrs.ngModel;

            var doReplace = function () {
                var curValue = element.val();
                var replace = new RegExp(sep, 'g');
                var cleanValue = curValue.replace(replace, "");

                // Create dotted value from clean
                var x1 = cleanValue + '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + '.' + '$2');
                }

                element.val(x1);

                scope.$apply(function () {
                    controller.$setViewValue(cleanValue);
                });
            }


            element.on('keyup', function () {
                doReplace();
            });

            element.on('blur', function () {
                doReplace();

            });

            // trigger for existing model values
            $timeout(doReplace, 1);

        }
    }
}]).directive('onlyLetters', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (text) {
                    var transformedInput = text.replace(/[^a-zA-Z ]/g, '');

                    if (transformedInput !== text) {
                        ngModelCtrl.$setViewValue(transformedInput);
                        ngModelCtrl.$render();
                    }
                    return transformedInput;
                }
                return undefined;
            }
            ngModelCtrl.$parsers.push(fromUser);
        }
    };
}).directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });
                event.preventDefault();
            }
        });
    };
});