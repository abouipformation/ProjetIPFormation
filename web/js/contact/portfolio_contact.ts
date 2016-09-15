/**
 * Created by root on 15/09/16.
 */
class PortFolioContact {

    private object: string;
    private email: string;
    private comments: string;

    constructor(object: string, email: string, comments: string) {
        this['object'] = object;
        this['email'] = email;
        this['comments'] = comments;
    }
}