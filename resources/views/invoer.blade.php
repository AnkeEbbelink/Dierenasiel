<!doctype html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr">
        </script>


  
         <title>Dierenopvang</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <style>



        </style>
    </head>
        <body>
          
            <div class="modal  is-active">
                <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head is-success">
                            <p class="modal-card-title">Kat toevoegen</p>
                            <button class="delete" aria-label="close"></button>
                        </header>
                        <section class="modal-card-body">
                            <div class="wrapper">
                                       
                            
                                    
                                    <div class="field">
                                            <label class="label">Gegevens</label>
                                            <div class="control">
                                              <input class="input" type="text" placeholder="Naam">
                                            </div>
                                          </div>
                                          
                                          <div class="field">
                                            <div class="control">
                                              <input class="input" type="text" placeholder="Text input" value="">
                                            </div>
                                          </div>
                                              
                                          <div class="field">
                                                <div class="control">
                                                        <input class="input" type="text" placeholder="Text input" value="">
                                                      </div>
                                                    </div>

                                                    <template>
                                                            <datepicker placeholder="European Format ('d-m-Y')" :config="{ dateFormat: 'd-m-Y', static: true }"></datepicker>
                                                          </template>
                                          <div class="field">
                                            <label class="label">Subject</label>
                                            <div class="control">
                                              <div class="select">
                                                <select>
                                                  <option>Select dropdown</option>
                                                  <option>With options</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="field">
                                            <label class="label">Message</label>
                                            <div class="control">
                                              <textarea class="textarea" placeholder="Textarea"></textarea>
                                            </div>
                                          </div>
                                          
                                          <div class="field">
                                            <div class="control">
                                              <label class="checkbox">
                                                <input type="checkbox">
                                                I agree to the <a href="#">terms and conditions</a>
                                              </label>
                                            </div>
                                          </div>
                                          
                                          <div class="field">
                                            <div class="control">
                                              <label class="radio">
                                                <input type="radio" name="question">
                                                Yes
                                              </label>
                                              <label class="radio">
                                                <input type="radio" name="question">
                                                No
                                              </label>
                                            </div>
                                          </div>
                                          
                                          <div class="field is-grouped">
                                            <div class="control">
                                              <button class="button is-link">Submit</button>
                                            </div>
                                            <div class="control">
                                              <button class="button is-text">Cancel</button>
                                            </div>
                                          </div>
                        </section>
                          <footer class="modal-card-foot">
                            <button class="button is-success">Save changes</button>
                            <button class="button">Cancel</button>
                          </footer>
                    </div>
                </div>
            </div>
        
        </body>    
    





</html>   

