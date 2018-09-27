var submission = '';
$(function() {
    submission = {
        config: {
            isPostBack: false,
            async: false,
            cache: false,
            type: 'POST',
            contentType: "application/json; charset=utf-8",
            data: '{}',
            dataType: 'json',
            method: "",
            url: "",
            ajaxCallMode: 0,
            uploadObj: ""
        },
        ajaxCall: function(config) {
            $.ajax({
                type: submission.config.type,
                contentType: submission.config.contentType,
                cache: submission.config.cache,
                async: submission.config.async,
                url: submission.config.url,
                data: submission.config.data,
                dataType: submission.config.dataType,
                success: submission.ajaxSuccess,
                error: submission.ajaxFailure
            });
        },

        InitializeUploader: function() {
            // Uploader for Appendix
            var globalSettings = {
                url: "lib/upload.php",
                multiple: true,
                dragDrop: true,
                fileName: "myfile",
                allowDuplicates: false,
                duplicateStrict: true,
                nestedForms: false,
                fileCounterStyle: ") ", // autoSubmit : true,
                // sequential : true,
                // sequentialCount : 1,
                // autoSubmit : false,
                // formData : {
                // "name" : "Test",
                // "age" : 29
                // },uploadObj
                allowedTypes: "pdf", //"jpg,png,gif,jpeg,bmp,png,pdf,doc,docx,xls,xlsx,txt", // acceptFiles : "image/*",
                maxFileCount: 5,
                maxFileSize: 5 * 1024 * 1024, // 5MB
                returnType: "json",
                showDelete: true,
                confirmDelete: true,
                statusBarWidth: 600,
                dragdropWidth: 600,
                uploadQueueOrder: 'top',
                deleteCallback: function(data, pd) {
                    pd.statusbar.hide(); // You choice.
                }
            }
            submission.config.uploadObj = $("#fileuploader").uploadFile(globalSettings);
        },

        ClearForm: function() {
            // validator.resetForm();
            if (this.config.uploadObj != "") {
                this.config.uploadObj.reset(true);
            }
            return false;
        },

        SaveProposal: function(buttonType, proposalSection, config, _flag) {
            var projectInfo = {
                ProjectTitle: $.trim($("#txtProjectTitle").val()),
                ProjectType: $("#ddlProjectType").val(),
                TypeOfRequest: $("#ddlTypeOfRequest").val(),
                ProjectLocation: $("#ddlLocationOfProject").val(),
                DueDate: $("#txtDueDate").val(),
                ProjectPeriodFrom: $("#txtProjectPeriodFrom").val(),
                ProjectPeriodTo: $("#txtProjectPeriodTo").val()
            };
            proposalInfo.AppendixInfo = this.config.uploadObj.getResponses().reverse();
        },

        ajaxSuccess: function(msg) {
            switch (submission.config.ajaxCallMode) {
                case 0:
                    break;
            }
        },
        ajaxFailure: function(msg) {
            switch (submission.config.ajaxCallMode) {
                case 0:
                    break;
            }
        },
        init: function(config) {
            submission.InitializeUploader();
        }
    };
    submission.init();
});