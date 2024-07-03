import './bootstrap';
import { FormEditor } from '@bpmn-io/form-js-editor';

const schema = {
    "components": [
        {
            "text": "# File an Invoice\n\nAdd your invoice details below.",
            "type": "text",
            "id": "Field_1euufeo",
            "layout": {
                "row": "Row_09wb1i0"
            }
        },
        {
            "label": "name_field",
            "type": "textfield",
            "layout": {
                "row": "Row_0bxvjit",
                "columns": null
            },
            "id": "Field_0tp9emc",
            "key": "name",
            "defaultValue": "Test de input"
        },
        {
            "label": "Last input",
            "type": "textfield",
            "layout": {
                "row": "Row_1guhfqs",
                "columns": null
            },
            "id": "Field_0t8tudx",
            "key": "lastname",
            "defaultValue": "algo"
        }
    ],
    "schemaVersion": 16,
    "exporter": {
        "name": "form-js (https://demo.bpmn.io)",
        "version": "1.8.3"
    },
    "type": "default",
    "id": "Form_1o5z24l"
}

const formEditor = new FormEditor({
    container: document.querySelector('#form-editor'),
});

await formEditor.importSchema(schema);

formEditor.on('changed', (s) => {
    const updatedSchema = formEditor.saveSchema();
    const updatedSchemaString = JSON.stringify(updatedSchema);
    console.log(updatedSchema);
    console.log(updatedSchemaString);

});



