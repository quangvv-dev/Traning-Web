import React, { Component } from 'react';
import { connect } from 'react-redux';
import { deleteUser,updateUser } from './../actions/UsersAction';

class Users extends Component {
    
    onDelete = ()=>{
        const id = this.props.user.id;
        this.props.deleteUser(id);
    }

    onUpdate =()=>{
      const  updateUser = this.props.user;
      this.props.updateUser(updateUser);
    }
    render() {
        return (
            <tbody>
                <tr>
                    <td>{this.props.user.id}</td>
                    <td>{this.props.user.name}</td>
                    <td>{this.props.user.birthday}</td>
                    <td>{this.props.user.sex}</td>
                    <td>{this.props.user.job}</td>
                    <td><button type="button" data-toggle="modal" data-target="#exampleModal" className="btn btn-primary" onClick={this.onUpdate} >Edit</button></td>
                    <td><button className="btn btn-danger" onClick={this.onDelete} >X</button></td>
                </tr>
            </tbody>
        );
    }
}
export default connect(null,{ deleteUser,updateUser })(Users);