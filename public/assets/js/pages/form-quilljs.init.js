
// Initialize the Quill editor
const quillEditor = new Quill('#snow-editor', {
  theme: 'snow',  // Snow theme for the editor
  modules: {
    table: {
      // Specify the options for table module if needed
      operationMenu: {
        items: {
          unmergeCells: {
            text: 'Unmerge cells'
          }
        }
      }
    },
    toolbar: [
      ['bold', 'italic', 'underline'],
      [{ 'list': 'ordered'}, { 'list': 'bullet' }],
      [{ 'table': 'insert-table' }],  // Adding table button
      [{ 'header': [1, 2, false] }],
      ['clean']
    ]
  }
});

/*var quillEditor = new Quill("#snow-editor",
  {
    theme:"snow",
    modules:{
      table:true,
      toolbar:[
        [{font:[]}, {size:[]}],
        ["bold","italic","underline","strike"],
        [{color:[]},{background:[]}],
        [{script:"super"},{script:"sub"}],
        [{header:[!1,1,2,3,4,5,6]},
          "blockquote"/!*,"code-block"*!/],
        [{list:"ordered"},{list:"bullet"},{indent:"-1"},{indent:"+1"}],
        [{"table":'better-table'}],
        [/!*"direction",*!/{align:[]}],
        ["link"/!*,"image","video"*!/],
        ["clean"]]}
  });*/
//quill=new Quill("#bubble-editor",{theme:"bubble"});
