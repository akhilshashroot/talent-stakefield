<div class="modal fade" id="viewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="viewModalLabel">View Employee</h4>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="userid" id="userid" value="">
                            <div class="form-group">
                            <label class="form-label">Talent ID</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="talentid" id="emptalentid" placeholder="Enter Talent Id" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Employee Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" id="empname" placeholder="Enter Employee name" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Email</label>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" id="empemail" placeholder="Enter Employee email" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Phone No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone" id="empphone" placeholder="Enter Employee phone" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Skill Set</label>
                                <div class="form-line">
                                    <textarea name="skillset" id="empskillset" cols="30" rows="5" class="form-control no-resize" required placeholder="php,jquery,symfony" readonly></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Experience</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="experience" id="empexperience" placeholder="Enter employee experience in years" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Turnaround Time</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="time" id="emptime" placeholder="Enter Turnaround time" readonly>
                               </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Availability</label>
                          
                            <input type="text" class="form-control" name="availability" id="empavailability" placeholder="Enter availability" readonly>
                         
                            </div>
                            <div class="form-group">
                            <label class="form-label">Rate(USD)</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="rate" id="emprate" placeholder="Enter employee rate" readonly>
                               </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </form>
            </div>
        </div>
    </div>
</div>