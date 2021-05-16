testApp.controller('EditorCtrl', function($scope) {
  $scope.code = " some text <br /> some more text"
  $scope.aceLoaded = function(_editor){
    // Editor part
    var _session = _editor.getSession();
    var _renderer = _editor.renderer;

    // Options
    _editor.setReadOnly(true);
    _session.setUndoManager(new ace.UndoManager());
    _renderer.setShowGutter(false);

  };
});	