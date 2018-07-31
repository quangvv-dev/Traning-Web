import React, { Component } from 'react';
import './App.css'
import Table from './components/table';
import Form from './components/form';
import { connect } from 'react-redux';
import { atcRemoveMember, atcChangeMember } from './actions/index';

class App extends Component {

  state = {
    name: "",
    id: "",
    birthday: "",
    sex: '',
    job: ''
  }

  componentWillReceiveProps(nextProps) {
    if (this.props.user !== nextProps.user) this.setState({ ...nextProps.user });
  }


  onChange = e => {
    this.setState({ [e.target.name]: e.target.value })
  }

  renderModal() {
    return (
      <div className="modal fade" id="myModal" role="dialog">
        <div className="modal-dialog">
          <div className="modal-content">
            <div className="modal-header">
              <button type="button" className="close" data-dismiss="modal">&times;</button>
              <h4 className="modal-title">Edit Member</h4>
            </div>
            <div className="modal-body">
              <div className="form-group">
                <label>ID :</label>
                <input type="number" name="id" className="form-control" placeholder="Id" value={this.state.id || ""} onChange={this.onChange} />
              </div>
              <div className="form-group">
                <label>Name :</label>
                <input type="text" name="name" className="form-control" placeholder="name" value={this.state.name || ""} onChange={this.onChange} />
              </div>
              <div className="form-group">
                <label>Birthday :</label>
                <input type="text" name="birthday" className="form-control" placeholder="birthday" value={this.state.birthday || ""} onChange={this.onChange} />
              </div>
              <div className="form-group">
                <label>Sex :</label>
                <input type="text" name="sex" className="form-control" placeholder="sex" value={this.state.sex || ""} onChange={this.onChange} />
              </div>
              <div className="form-group">
                <label>Job :</label>
                <input type="text" name="job" className="form-control" placeholder="job" value={this.state.job || ""} onChange={this.onChange} />
              </div>
            </div>
            <div className="modal-footer">
              <button type="button" className="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" className="btn btn-primary" onClick={this.onSave}>Save Change</button>
            </div>
          </div>
        </div>
      </div>
    )
  }
  render() {
    return (
      <div className="container">
        <div className="col-md-4">
          <Form />
        </div>
        <div className="col-xs-8 col-ms-8 col-md-8 text-center">
          <table className="table table-bordered table-striped">
            <thead>
              <tr >
                <th className="text-center">Id</th>
                <th className="text-center">Name</th>
                <th className="text-center">Birthday</th>
                <th className="text-center">Sex</th>
                <th className="text-center">Job</th>
                <th className="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              {this.showMember()}
            </tbody>
          </table>
        </div>
        {this.renderModal()}
      </div>
    );
  }
  showMember() {
    var result = null;
    var { onDeleteInMember, members } = this.props;
    if (members.length > 0) {
      result = members.map((member, index) => {
        return <Table
          key={index}
          member={member}
          onDeleteInMember={onDeleteInMember}

        />
      });
    }
    return result;
  }

  onSave = (e) => {
    e.preventDefault();
    // const member = {
    //   id        : this.props.user.id,
    //   name      : this.refs.name.value,
    //   birthday  : this.refs.birthday.value,
    //   sex       : this.refs.sex.value,
    //   job       : this.refs.job.value
    // }
console.log(this.state);
    this.props.onSave(this.state);
  }
}

const mapStateToProps = state => {
  return {
    members: state.members.users,
    user: state.members.user
  }
}
const mapDispatchToProps = (dispatch, props) => {
  return {
    onDeleteInMember: (member) => {
      dispatch(atcRemoveMember(member));
    },
    onSave: (member) => {
      dispatch(atcChangeMember(member));
    }
  }
}
export default connect(mapStateToProps, mapDispatchToProps)(App);
