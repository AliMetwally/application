/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var appRoot = setAppRoot('application', 'application');




/************** Plug-ins ****************************** */
/**
 * 
 * @param {type} devFolderName 
 * @param {type} prodFolderName
 * @returns {String}
 */
function setAppRoot(devFolderName, prodFolderName) {
    var hostname = window.location.hostname;

    /*
     * set the appRoot
     * This will work for both http, https with or without www
     * @type String
     */

    //attach trailing slash to both foldernames
    var devFolder = devFolderName ? devFolderName + "/" : "";
    var prodFolder = prodFolderName ? prodFolderName + "/" : "";

    var baseURL = "";

    if (hostname.search("localhost") !== -1 || (hostname.search("192.168.") !== -1) || (hostname.search("127.0.0.") !== -1)) {
        baseURL = window.location.origin + "/" + devFolder;
    } else {
        baseURL = window.location.origin + "/" + prodFolder;
    }

    return baseURL;
}

