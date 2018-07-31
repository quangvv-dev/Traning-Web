import * as  Types from './../contants/ActionTypes';


export const atcAddMember = (member) => {
    return {
        type : Types.ADD_MEMBERS,
        member
    }
}
export const atcRemoveMember = (member) => {
    return {
        type : Types.DELETE_MEMBERS,
        member
    }
}

export const atcEditMember = (member) => {
    return {
        type : Types.EDIT_MEMBERS,
        member
    }
}

export const atcChangeMember = (member) => {
    return {
        type : Types.CHANGE_MEMBER,
         member
    }
}