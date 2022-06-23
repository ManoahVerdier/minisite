function tinymce_setup_callback(editor) {
    console.log("M'hello");
    console.log(editor.settings.toolbar );
    editor.settings.toolbar = editor.settings.toolbar + ' | removeformat'
    console.log(editor.settings.toolbar );
}