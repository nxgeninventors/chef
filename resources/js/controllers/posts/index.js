import { PostsConfig } from "../../config/datatables";
import DataTableHelper from "../../helpers/datatable-helper";
// import {AddForm, UpdateForm} from './validation';
// import ValidationHelper from '../../helpers/validation-helper';

var PostsCtrl = function () {
    function init() {
        console.log("posts--------");
        new DataTableHelper(PostsConfig);

        // if ($('.edit_form') && $('.edit_form').length) {
        //     new ValidationHelper(UpdateForm);
        // } else {
        //     new ValidationHelper(AddForm);
        // }
    }
    return {
        init: init,
    };
};

export default PostsCtrl;
