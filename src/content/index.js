import EditorJs from '@editorjs/editorjs';
import ImageTool from '@editorjs/image';
import Header from '@editorjs/header';
import List from '@editorjs/list';
import Embed from '@editorjs/embed';



const editor = new EditorJs({

  placeholder: 'Let`s write an awesome story!',
  holder: 'editorjs',

  tools: {
    header: {
      class:Header,
      inlineToolbar: true
    },

    list: {
      class: List,
      inlineToolbar:['link','bold']
    },

    embed: {
      class: Embed,
      inlineToolbar: false,
      config:{
        services:{
          youtube: true,
          coub: true
        },
      },
    },

    image: {
        class: ImageTool,
        config: {
          uploader: {
            // basic file upload preview
            uploadByFile: async (file) => { // async because it expects a promise
              const url = window.URL.createObjectURL(file) // generate a blob in memory
      
              return {
                success: 1,
                file: {
                  url,
                  name: file.name,
                  size: file.size,
                  source: file // keep a reference to the original file
                }
              }
            }
          }
        }
      },
    

  },/*end tools */

})

let saveBtn = document.querySelector('button');

saveBtn.addEventListener('click',function(){
    editor.save().then((outputData)=>{
        console.log('Saved:',outputData)
        alert("Saved!! :)");
    }).catch((error)=>{
        console.log('Save failed: ',error)
        alert("Save failed!! you have an error ",error);
    });
})
