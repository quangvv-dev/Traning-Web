import React, { Component } from 'react';
import { connect } from 'react-redux';
import * as actions from './../actions/index';
class Form extends Component {
    state = {
        member: {
            name: "",
            id: "",
            birthday: "",
            sex: '',
            job: ''
        }
    }

    render() {
        var { member } = this.props;
        return (
            <div className="panel panel-danger">
                <div className="panel-heading">
                    <h3 className="panel-title">Thêm công việc </h3>
                </div>
                <div className="panel-body">

                    <div className="form-group">
                        <label>ID :</label>
                        <input type="number" name="id" className="form-control" placeholder="Id" onChange={this.onChange} />
                    </div>
                    <div className="form-group">
                        <label>Name :</label>
                        <input type="text" name="name" className="form-control" placeholder="name" onChange={this.onChange} />
                    </div>
                    <div className="form-group">
                        <label>Birthday :</label>
                        <input type="text" name="birthday" className="form-control" placeholder="birthday" onChange={this.onChange} />
                    </div>
                    <div className="form-group">
                        <label>Sex :</label>
                        <input type="text" name="sex" className="form-control" placeholder="sex" onChange={this.onChange} />
                    </div>
                    <div className="form-group">
                        <label>Job :</label>
                        <input type="text" name="job" className="form-control" placeholder="job" onChange={this.onChange} />
                    </div>
                    <button type="submit" className="btn btn-primary" onClick={() => this.onAddMember(member)}>Submit</button>


                </div>
            </div>
        );
    }
    onAddMember = () => {
        this.props.onAddMember(this.state.member);
    }

    onChange = e => {
        e.preventDefault();
        const member            = this.state.member;
        member[e.target.name]   = e.target.value;
        this.setState(state => ({ ...state, member }));

    }
}

const mapStateToProps = state => {
    return {
        members: state.members.users
    }
}
const mapDispatchToProps = (dispatch, props) => {
    return {
        onAddMember: (member) => {
            dispatch(actions.atcAddMember(member));
        }
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(Form);