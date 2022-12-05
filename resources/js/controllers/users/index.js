import { UsersConfig } from "../../config/datatables";
import DataTableHelper from "../../helpers/datatable-helper";

var UsersCtrl = function () {
    function init() {
        new DataTableHelper(UsersConfig);
    }
    return {
        init: init,
    };
};

export default UsersCtrl;
