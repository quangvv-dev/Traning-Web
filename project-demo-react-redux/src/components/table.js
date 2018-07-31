import React, { Component } from 'react';
import {connect} from 'react-redux';
import { atcEditMember} from './../actions/index';
class Table extends Component {
    render() {
        var { member } = this.props;
        return (
          <tr>
          <td>{member.id}</td>
          <td>{member.name}</td>
          <td>{member.birthday}</td>
          <td>{member.sex}</td>
          <td>{member.job}</td>
          <td>
            <button type="submit" name="edit" className="btn btn-primary" data-toggle="modal" data-target="#myModal" onClick = {this.onEditMember}>Edit</button> &nbsp;
            <button type="submit" name="delete" className="btn btn-danger" onClick = {this.onDelete}>Delete</button>
          </td>
        </tr>
        );
    }
    onDelete = e => {
      this.props.onDeleteInMember(this.props.member);
    }
    onEditMember = e => {
      this.props.onEditMember(this.props.member);
    }
}


// const mapStateToProps = state => {
//   return {
//     member : state.members.users
//   }
// }
const mapDispatchToProps = (dispatch, props) => {
    return {
      onEditMember : member => {
        dispatch(atcEditMember(member));
      }
      
    }
   
}
export default connect(null, mapDispatchToProps)(Table);