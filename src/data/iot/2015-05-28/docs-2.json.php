<?php
// This file was auto-generated from sdk-root/src/data/iot/2015-05-28/docs-2.json
return [ 'version' => '2.0', 'operations' => [ 'AcceptCertificateTransfer' => '<p>Accepts a pending certificate transfer. The default state of the certificate is INACTIVE.</p> <p>To check for pending certificate transfers, call <a>ListCertificates</a> to enumerate your certificates.</p>', 'AttachPrincipalPolicy' => '<p>Attaches the specified policy to the specified principal (certificate or other credential].</p>', 'AttachThingPrincipal' => '<p>Attaches the specified principal to the specified thing.</p>', 'CancelCertificateTransfer' => '<p>Cancels a pending transfer for the specified certificate.</p> <p><b>Note</b> Only the transfer source account can use this operation to cancel a transfer (transfer destinations can use <a>RejectCertificateTransfer</a> instead]. After transfer, AWS IoT returns the certificate to the source account in the INACTIVE state. Once the destination account has accepted the transfer, the transfer may no longer be cancelled.</p> <p>After a certificate transfer is cancelled, the status of the certificate changes from PENDING_TRANSFER to INACTIVE.</p>', 'CreateCertificateFromCsr' => '<p>Creates an X.509 certificate using the specified certificate signing request.</p> <p><b>Note</b> Reusing the same certificate signing request (CSR] results in a distinct certificate.</p>', 'CreateKeysAndCertificate' => '<p>Creates a 2048 bit RSA key pair and issues an X.509 certificate using the issued public key.</p> <p><b>Note</b> This is the only time AWS IoT issues the private key for this certificate. It is important to keep track of the private key.</p>', 'CreatePolicy' => '<p>Creates an AWS IoT policy.</p> <p>The created policy is the default version for the policy. This operation creates a policy version with a version identifier of <b>1</b> and sets <b>1</b> as the policy\'s default version.</p>', 'CreatePolicyVersion' => '<p>Creates a new version of the specified AWS IoT policy.</p>', 'CreateThing' => '<p>Creates a thing in the thing registry.</p>', 'CreateTopicRule' => '<p>Creates a rule.</p>', 'DeleteCertificate' => '<p>Deletes the specified certificate.</p> <p>A certificate cannot be deleted if it has a policy attached to it. To delete a certificate, first detach all policies using the <a>DetachPrincipalPolicy</a> operation.</p> <p>In addition, a certificate cannot be deleted if it is in ACTIVE status. To delete a certificate, first change the status to INACTIVE using the <a>UpdateCertificate</a> operation.</p>', 'DeletePolicy' => '<p>Deletes the specified policy.</p> <p>A policy cannot be deleted if: </p> <p> - it has non-default versions</p> <p> - it is attached to any certificate</p> <p>To delete a policy:</p> <p> - First delete all the non-default versions of the policy using the <a>DeletePolicyVersion</a> API.</p> <p> - Detach it from any certificate using the <a>DetachPrincipalPolicy</a> API.</p> <p>When a policy is deleted, its default version is deleted with it.</p>', 'DeletePolicyVersion' => '<p>Deletes the specified version of the specified policy. The default version of the policy cannot be deleted.</p> <p>To delete the default version use the <a>DeletePolicy</a> API or mark the policy as non-default and then delete it.</p>', 'DeleteThing' => '<p>Deletes the specified thing from the Thing Registry.</p>', 'DeleteTopicRule' => '<p>Deletes the specified rule.</p>', 'DescribeCertificate' => '<p>Gets information about the specified certificate.</p>', 'DescribeEndpoint' => '<p>Returns a unique URL specific to the AWS account making the call. The URL points to the AWS IoT data plane endpoint. The customer-specific endpoint should be provided to all data plane operations.</p>', 'DescribeThing' => '<p>Gets information about the specified thing.</p>', 'DetachPrincipalPolicy' => '<p>Removes the specified policy from the specified certificate.</p>', 'DetachThingPrincipal' => '<p>Detaches the specified principal from the specified thing.</p>', 'GetLoggingOptions' => '<p>Gets the logging options.</p>', 'GetPolicy' => '<p>Gets information about the specified policy with the policy document of the default version.</p>', 'GetPolicyVersion' => '<p>Gets information about the specified policy version.</p>', 'GetTopicRule' => '<p>Gets information about the specified rule.</p>', 'ListCertificates' => '<p>Lists your certificates.</p> <p>The results are paginated with a default page size of 25. You can retrieve additional results using the returned marker.</p>', 'ListPolicies' => '<p>Lists your policies.</p>', 'ListPolicyVersions' => '<p>Lists the versions of the specified policy, and identifies the default version.</p>', 'ListPrincipalPolicies' => '<p>Lists the policies attached to the specified principal. If you use an Amazon Cognito identity, the ID needs to be in <a href="http://docs.aws.amazon.com/cognitoidentity/latest/APIReference/API_GetCredentialsForIdentity.html#API_GetCredentialsForIdentity_RequestSyntax">Amazon Cognito Identity format</a>.</p>', 'ListPrincipalThings' => '<p>Lists the things associated with the specified principal.</p>', 'ListThingPrincipals' => '<p>Lists the principals associated with the specified thing.</p>', 'ListThings' => '<p>Lists your things. You can pass an AttributeName and/or AttributeValue to filter your things. For example: "ListThings where AttributeName=Color and AttributeValue=Red"</p>', 'ListTopicRules' => '<p>Lists the rules for the specific topic.</p>', 'RejectCertificateTransfer' => '<p>Rejects a pending certificate transfer. After AWS IoT rejects a certificate transfer, the certificate status changes from <b>PENDING_TRANFER</b> to <b>INACTIVE</b>.</p> <p>To check for pending certificate transfers, call <a>ListCertificates</a> to enumerate your certificates.</p> <p>This operation can only be called by the transfer destination. Once called, the certificate will be returned to the source\'s account in the INACTIVE state.</p>', 'ReplaceTopicRule' => '<p>Replaces the specified rule. You must specify all parameters for the new rule.</p>', 'SetDefaultPolicyVersion' => '<p>Sets the specified policy version as the default for the specified policy.</p>', 'SetLoggingOptions' => '<p>Sets the logging options.</p>', 'TransferCertificate' => '<p>Transfers the specified certificate to the specified AWS account.</p> <p>You can cancel the transfer until it is acknowledged by the recipient.</p> <p>No notification is sent to the transfer destination\'s account, it is up to the caller to notify the transfer target.</p> <p>The certificate being transferred must not be in the ACTIVE state. It can be deactivated using the UpdateCertificate API.</p> <p>The certificate must not have any policies attached to it. These can be detached using the <a>DetachPrincipalPolicy</a> API.</p>', 'UpdateCertificate' => '<p>Updates the status of the specified certificate. This operation is idempotent.</p> <p>Moving a cert from the ACTIVE state (including REVOKED] will NOT disconnect currently-connected devices, although these devices will be unable to reconnect.</p> <p>The ACTIVE state is required to authenticate devices connecting to AWS IoT using a certificate.</p>', 'UpdateThing' => '<p>Updates the data for a thing.</p>', ], 'shapes' => [ 'AcceptCertificateTransferRequest' => [ 'base' => '<p>The input for the AcceptCertificateTransfer operation.</p>', 'refs' => [], ], 'Action' => [ 'base' => '<p>Describes the actions associated with a rule.</p>', 'refs' => [], ], 'ActionList' => [ 'refs' => [ 'TopicRule$actions' => '<p>The actions associated with the rule.</p>', 'TopicRulePayload$actions' => '<p>The actions associated with the rule.</p>', ], ], 'AscendingOrder' => [ 'refs' => [ 'ListCertificatesRequest$ascendingOrder' => '<p>Specifies the order for results. If True, the results are returned in ascending order, based on the creation date.</p>', 'ListPoliciesRequest$ascendingOrder' => '<p>Specifies the order for results. If true, the results are returned in ascending creation order.</p>', 'ListPrincipalPoliciesRequest$ascendingOrder' => '<p>Specifies the order for results. If true, results are returned in ascending creation order.</p>', ], ], 'AttachPrincipalPolicyRequest' => [ 'base' => '<p>The input for the AttachPrincipalPolicy operation.</p>', 'refs' => [], ], 'AttachThingPrincipalRequest' => [ 'base' => '<p>The input for the AttachThingPrincipal operation.</p>', 'refs' => [], ], 'AttachThingPrincipalResponse' => [ 'base' => '<p>The output from the AttachThingPrincipal operation.</p>', 'refs' => [], ], 'AttributeName' => [ 'refs' => [ 'ListThingsRequest$attributeName' => '<p>The attribute name.</p>', ], ], 'AttributePayload' => [ 'base' => '<p>The attribute payload, a JSON string containing up to three key-value pairs.</p> <p>For example: {\\"attributes\\":{\\"string1\\":\\"string2\\”}}</p>', 'refs' => [ 'CreateThingRequest$attributePayload' => '<p>The attribute payload. Which consists of up to 3 name/value pairs in a JSON document. For example: {\\"attributes\\":{\\"string1\\":\\"string2\\”}}</p>', 'UpdateThingRequest$attributePayload' => '<p>The attribute payload, a JSON string containing up to three key-value pairs.</p> <p>For example: {\\"attributes\\":{\\"string1\\":\\"string2\\”}}</p>', ], ], 'AttributeValue' => [ 'refs' => [ 'ListThingsRequest$attributeValue' => '<p>The attribute value.</p>', ], ], 'Attributes' => [ 'refs' => [ 'AttributePayload$attributes' => '<p>A JSON string containing up to three key-value pair in JSON format.</p> <p>For example: {\\"attributes\\":{\\"string1\\":\\"string2\\”}}</p>', 'DescribeThingResponse$attributes' => '<p>The attributes which are name/value pairs in JSON format. For example: </p> <p>{\\"attributes\\":{\\"some-name1\\":\\"some-value1\\”}, {\\"some-name2\\":\\"some-value2\\”}, {\\"some-name3\\":\\"some-value3\\”}}</p>', 'ThingAttribute$attributes' => '<p>The attributes.</p>', ], ], 'AwsAccountId' => [ 'refs' => [ 'CertificateDescription$ownedBy' => '<p>The ID of the AWS account that owns the certificate.</p>', 'TransferCertificateRequest$targetAwsAccount' => '<p>The AWS account.</p>', ], ], 'AwsArn' => [ 'refs' => [ 'DynamoDBAction$roleArn' => '<p>The ARN of the IAM role that grants access.</p>', 'GetLoggingOptionsResponse$roleArn' => '<p>The ARN of the IAM role that grants access.</p>', 'KinesisAction$roleArn' => '<p>The ARN of the IAM role that grants access.</p>', 'LoggingOptionsPayload$roleArn' => '<p>The ARN of the IAM role that grants access.</p>', 'RepublishAction$roleArn' => '<p>The ARN of the IAM role that grants access.</p>', 'S3Action$roleArn' => '<p>The ARN of the IAM role that grants access.</p>', 'SnsAction$roleArn' => '<p>The ARN of the IAM role that grants access.</p>', 'SnsAction$targetArn' => '<p>The ARN of the SNS topic.</p>', 'SqsAction$roleArn' => '<p>The ARN of the IAM role that grants access.</p>', ], ], 'BucketName' => [ 'refs' => [ 'S3Action$bucketName' => '<p>The S3 bucket.</p>', ], ], 'CancelCertificateTransferRequest' => [ 'base' => '<p>The input for the CancelCertificateTransfer operation.</p>', 'refs' => [], ], 'Certificate' => [ 'base' => '<p>Information about a certificate.</p>', 'refs' => [], ], 'CertificateArn' => [ 'refs' => [ 'Certificate$certificateArn' => '<p>The ARN of the certificate.</p>', 'CertificateDescription$certificateArn' => '<p>The ARN of the certificate.</p>', 'CreateCertificateFromCsrResponse$certificateArn' => '<p>The Amazon Resource Name (ARN] of the certificate. You can use the ARN as a principal for policy operations.</p>', 'CreateKeysAndCertificateResponse$certificateArn' => '<p>The ARN of the certificate.</p>', 'TransferCertificateResponse$transferredCertificateArn' => '<p>The ARN of the certificate.</p>', ], ], 'CertificateDescription' => [ 'base' => '<p>Describes a certificate.</p>', 'refs' => [ 'DescribeCertificateResponse$certificateDescription' => '<p>The description of the certificate.</p>', ], ], 'CertificateId' => [ 'refs' => [ 'AcceptCertificateTransferRequest$certificateId' => '<p>The ID of the certificate.</p>', 'CancelCertificateTransferRequest$certificateId' => '<p>The ID of the certificate.</p>', 'Certificate$certificateId' => '<p>The ID of the certificate.</p>', 'CertificateDescription$certificateId' => '<p>The ID of the certificate.</p>', 'CreateCertificateFromCsrResponse$certificateId' => '<p>The ID of the certificate. Certificate management operations only take a certificateId.</p>', 'CreateKeysAndCertificateResponse$certificateId' => '<p>The ID of the certificate. AWS IoT issues a default subject name for the certificate (e.g., AWS IoT Certificate].</p>', 'DeleteCertificateRequest$certificateId' => '<p>The ID of the certificate.</p>', 'DescribeCertificateRequest$certificateId' => '<p>The ID of the certificate.</p>', 'RejectCertificateTransferRequest$certificateId' => '<p>The ID of the certificate.</p>', 'TransferCertificateRequest$certificateId' => '<p>The ID of the certificate.</p>', 'UpdateCertificateRequest$certificateId' => '<p>The ID of the certificate.</p>', ], ], 'CertificatePem' => [ 'refs' => [ 'CertificateDescription$certificatePem' => '<p>The certificate data, in PEM format.</p>', 'CreateCertificateFromCsrResponse$certificatePem' => '<p>The certificate data, in PEM format.</p>', 'CreateKeysAndCertificateResponse$certificatePem' => '<p>The certificate data, in PEM format.</p>', ], ], 'CertificateSigningRequest' => [ 'refs' => [ 'CreateCertificateFromCsrRequest$certificateSigningRequest' => '<p>The certificate signing request (CSR].</p>', ], ], 'CertificateStateException' => [ 'base' => '<p>The certificate operation is not allowed.</p>', 'refs' => [], ], 'CertificateStatus' => [ 'refs' => [ 'Certificate$status' => '<p>The status of the certificate.</p>', 'CertificateDescription$status' => '<p>The status of the certificate.</p>', 'UpdateCertificateRequest$newStatus' => '<p>The new status.</p>', ], ], 'Certificates' => [ 'refs' => [ 'ListCertificatesResponse$certificates' => '<p>The descriptions of the certificates.</p>', ], ], 'ClientId' => [ 'refs' => [ 'DescribeThingResponse$defaultClientId' => '<p>The default client ID.</p>', ], ], 'CreateCertificateFromCsrRequest' => [ 'base' => '<p>The input for the CreateCertificateFromCsr operation.</p>', 'refs' => [], ], 'CreateCertificateFromCsrResponse' => [ 'base' => '<p>The output from the CreateCertificateFromCsr operation.</p>', 'refs' => [], ], 'CreateKeysAndCertificateRequest' => [ 'base' => '<p>The input for the CreateKeysAndCertificate operation.</p>', 'refs' => [], ], 'CreateKeysAndCertificateResponse' => [ 'base' => '<p>The output of the CreateKeysAndCertificate operation.</p>', 'refs' => [], ], 'CreatePolicyRequest' => [ 'base' => '<p>The input for the CreatePolicy operation.</p>', 'refs' => [], ], 'CreatePolicyResponse' => [ 'base' => '<p>The output from the CreatePolicy operation.</p>', 'refs' => [], ], 'CreatePolicyVersionRequest' => [ 'base' => '<p>The input for the CreatePolicyVersion operation.</p>', 'refs' => [], ], 'CreatePolicyVersionResponse' => [ 'base' => '<p>The output of the CreatePolicyVersion operation.</p>', 'refs' => [], ], 'CreateThingRequest' => [ 'base' => '<p>The input for the CreateThing operation.</p>', 'refs' => [], ], 'CreateThingResponse' => [ 'base' => '<p>The output of the CreateThing operation.</p>', 'refs' => [], ], 'CreateTopicRuleRequest' => [ 'base' => '<p>The input for the CreateTopicRule operation.</p>', 'refs' => [], ], 'CreatedAtDate' => [ 'refs' => [ 'TopicRule$createdAt' => '<p>The date and time the rule was created.</p>', 'TopicRuleListItem$createdAt' => '<p>The date and time the rule was created.</p>', ], ], 'DateType' => [ 'refs' => [ 'Certificate$creationDate' => '<p>The date and time the certificate was created.</p>', 'CertificateDescription$creationDate' => '<p>The date and time the certificate was created.</p>', 'CertificateDescription$lastModifiedDate' => '<p>The date and time the certificate was last modified.</p>', 'PolicyVersion$createDate' => '<p>The date and time the policy was created.</p>', ], ], 'DeleteCertificateRequest' => [ 'base' => '<p>The input for the DeleteCertificate operation.</p>', 'refs' => [], ], 'DeleteConflictException' => [ 'base' => '<p>You can\'t delete the resource because it is attached to one or more resources.</p>', 'refs' => [], ], 'DeletePolicyRequest' => [ 'base' => '<p>The input for the DeletePolicy operation.</p>', 'refs' => [], ], 'DeletePolicyVersionRequest' => [ 'base' => '<p>The input for the DeletePolicyVersion operation.</p>', 'refs' => [], ], 'DeleteThingRequest' => [ 'base' => '<p>The input for the DeleteThing operation.</p>', 'refs' => [], ], 'DeleteThingResponse' => [ 'base' => '<p>The output of the DeleteThing operation.</p>', 'refs' => [], ], 'DeleteTopicRuleRequest' => [ 'base' => '<p>The input for the DeleteTopicRule operation.</p>', 'refs' => [], ], 'DeliveryStreamName' => [ 'refs' => [], ], 'DescribeCertificateRequest' => [ 'base' => '<p>The input for the DescribeCertificate operation.</p>', 'refs' => [], ], 'DescribeCertificateResponse' => [ 'base' => '<p>The output of the DescribeCertificate operation.</p>', 'refs' => [], ], 'DescribeEndpointRequest' => [ 'base' => '<p>The input for the DescribeEndpoint operation.</p>', 'refs' => [], ], 'DescribeEndpointResponse' => [ 'base' => '<p>The output from the DescribeEndpoint operation.</p>', 'refs' => [], ], 'DescribeThingRequest' => [ 'base' => '<p>The input for the DescribeThing operation.</p>', 'refs' => [], ], 'DescribeThingResponse' => [ 'base' => '<p>The output from the DescribeThing operation.</p>', 'refs' => [], ], 'Description' => [ 'refs' => [ 'TopicRule$description' => '<p>The description of the rule.</p>', 'TopicRulePayload$description' => '<p>The description of the rule.</p>', ], ], 'DetachPrincipalPolicyRequest' => [ 'base' => '<p>The input for the DetachPrincipalPolicy operation.</p>', 'refs' => [], ], 'DetachThingPrincipalRequest' => [ 'base' => '<p>The input for the DetachThingPrincipal operation.</p>', 'refs' => [], ], 'DetachThingPrincipalResponse' => [ 'base' => '<p>The output from the DetachThingPrincipal operation.</p>', 'refs' => [], ], 'DynamoDBAction' => [ 'base' => '<p>Describes an action to write to a DynamoDB table.</p> <p>The <code>tableName</code>, <code>hashKeyField</code>, and <code>rangeKeyField</code> values must match the values used when you created the table.</p> <p>The <code>hashKeyValue</code> and <code>rangeKeyvalue</code> fields use a substitution template syntax. These templates provide data at runtime. The syntax is as follows: ${<i>sql-expression</i>}.</p> <p>You can specify any expression that\'s valid in a WHERE or SELECT clause, including JSON properties, comparisons, calculations, and functions. For example, the following field uses the third level of the topic:</p> <p><code>"hashKeyValue": "${topic(3]}"</code></p> <p>The following field uses the timestamp:</p> <p><code>"rangeKeyValue": "${timestamp(]}"</code></p>', 'refs' => [ 'Action$dynamoDB' => '<p>Write to a DynamoDB table.</p>', ], ], 'EndpointAddress' => [ 'refs' => [ 'DescribeEndpointResponse$endpointAddress' => '<p>The address.</p>', ], ], 'FirehoseAction' => [ 'refs' => [], ], 'FunctionArn' => [ 'refs' => [ 'LambdaAction$functionArn' => '<p>The ARN of the Lambda function.</p>', ], ], 'GetLoggingOptionsRequest' => [ 'base' => '<p>The input for the GetLoggingOptions operation.</p>', 'refs' => [], ], 'GetLoggingOptionsResponse' => [ 'base' => '<p>The output from the GetLoggingOptions operation.</p>', 'refs' => [], ], 'GetPolicyRequest' => [ 'base' => '<p>The input for the GetPolicy operation.</p>', 'refs' => [], ], 'GetPolicyResponse' => [ 'base' => '<p>The output from the GetPolicy operation.</p>', 'refs' => [], ], 'GetPolicyVersionRequest' => [ 'base' => '<p>The input for the GetPolicyVersion operation.</p>', 'refs' => [], ], 'GetPolicyVersionResponse' => [ 'base' => '<p>The output from the GetPolicyVersion operation.</p>', 'refs' => [], ], 'GetTopicRuleRequest' => [ 'base' => '<p>The input for the GetTopicRule operation.</p>', 'refs' => [], ], 'GetTopicRuleResponse' => [ 'base' => '<p>The output from the GetTopicRule operation.</p>', 'refs' => [], ], 'HashKeyField' => [ 'refs' => [ 'DynamoDBAction$hashKeyField' => '<p>The hash key name.</p>', ], ], 'HashKeyValue' => [ 'refs' => [ 'DynamoDBAction$hashKeyValue' => '<p>The hash key value.</p>', ], ], 'InternalException' => [ 'base' => '<p>An unexpected error has occurred.</p>', 'refs' => [], ], 'InternalFailureException' => [ 'base' => '<p>An unexpected error has occurred.</p>', 'refs' => [], ], 'InvalidRequestException' => [ 'base' => '<p>The request is not valid.</p>', 'refs' => [], ], 'IsDefaultVersion' => [ 'refs' => [ 'CreatePolicyVersionResponse$isDefaultVersion' => '<p>Specifies whether the policy version is the default.</p>', 'GetPolicyVersionResponse$isDefaultVersion' => '<p>Specifies whether the policy version is the default.</p>', 'PolicyVersion$isDefaultVersion' => '<p>Specifies whether the policy version is the default.</p>', ], ], 'IsDisabled' => [ 'refs' => [ 'ListTopicRulesRequest$ruleDisabled' => '<p>Specifies whether the rule is disabled.</p>', 'TopicRule$ruleDisabled' => '<p>Specifies whether the rule is disabled.</p>', 'TopicRuleListItem$ruleDisabled' => '<p>Specifies whether the rule is disabled.</p>', 'TopicRulePayload$ruleDisabled' => '<p>Specifies whether the rule is disabled.</p>', ], ], 'Key' => [ 'refs' => [ 'S3Action$key' => '<p>The object key.</p>', ], ], 'KeyPair' => [ 'base' => '<p>Describes a key pair.</p>', 'refs' => [ 'CreateKeysAndCertificateResponse$keyPair' => '<p>The generated key pair.</p>', ], ], 'KinesisAction' => [ 'base' => '<p>Describes an action to write data to an Amazon Kinesis stream.</p>', 'refs' => [ 'Action$kinesis' => '<p>Write data to a Kinesis stream.</p>', ], ], 'LambdaAction' => [ 'base' => '<p>Describes an action to invoke a Lamdba function.</p>', 'refs' => [ 'Action$lambda' => '<p>Invoke a Lambda function.</p>', ], ], 'LimitExceededException' => [ 'base' => '<p>The number of attached entities exceeds the limit.</p>', 'refs' => [], ], 'ListCertificatesRequest' => [ 'base' => '<p>The input for the ListCertificates operation.</p>', 'refs' => [], ], 'ListCertificatesResponse' => [ 'base' => '<p>The output of the ListCertificates operation.</p>', 'refs' => [], ], 'ListPoliciesRequest' => [ 'base' => '<p>The input for the ListPolicies operation.</p>', 'refs' => [], ], 'ListPoliciesResponse' => [ 'base' => '<p>The output from the ListPolicies operation.</p>', 'refs' => [], ], 'ListPolicyVersionsRequest' => [ 'base' => '<p>The input for the ListPolicyVersions operation.</p>', 'refs' => [], ], 'ListPolicyVersionsResponse' => [ 'base' => '<p>The output from the ListPolicyVersions operation.</p>', 'refs' => [], ], 'ListPrincipalPoliciesRequest' => [ 'base' => '<p>The input for the ListPrincipalPolicies operation.</p>', 'refs' => [], ], 'ListPrincipalPoliciesResponse' => [ 'base' => '<p>The output from the ListPrincipalPolicies operation.</p>', 'refs' => [], ], 'ListPrincipalThingsRequest' => [ 'base' => '<p>The input for the ListPrincipalThings operation.</p>', 'refs' => [], ], 'ListPrincipalThingsResponse' => [ 'base' => '<p>The output from the ListPrincipalThings operation.</p>', 'refs' => [], ], 'ListThingPrincipalsRequest' => [ 'base' => '<p>The input for the ListThingPrincipal operation.</p>', 'refs' => [], ], 'ListThingPrincipalsResponse' => [ 'base' => '<p>The output from the ListThingPrincipals operation.</p>', 'refs' => [], ], 'ListThingsRequest' => [ 'base' => '<p>The input for the ListThings operation.</p>', 'refs' => [], ], 'ListThingsResponse' => [ 'base' => '<p>The output from the ListThings operation.</p>', 'refs' => [], ], 'ListTopicRulesRequest' => [ 'base' => '<p>The input for the ListTopicRules operation.</p>', 'refs' => [], ], 'ListTopicRulesResponse' => [ 'base' => '<p>The output from the ListTopicRules operation.</p>', 'refs' => [], ], 'LogLevel' => [ 'refs' => [ 'GetLoggingOptionsResponse$logLevel' => '<p>The logging level.</p>', 'LoggingOptionsPayload$logLevel' => '<p>The logging level.</p>', ], ], 'LoggingOptionsPayload' => [ 'base' => '<p>Describes the logging options payload.</p>', 'refs' => [ 'SetLoggingOptionsRequest$loggingOptionsPayload' => '<p>The logging options payload.</p>', ], ], 'MalformedPolicyException' => [ 'base' => '<p>The policy documentation is not valid.</p>', 'refs' => [], ], 'Marker' => [ 'refs' => [ 'ListCertificatesRequest$marker' => '<p>The marker for the next set of results.</p>', 'ListCertificatesResponse$nextMarker' => '<p>The marker for the next set of results, or null if there are no additional results.</p>', 'ListPoliciesRequest$marker' => '<p>The marker for the next set of results.</p>', 'ListPoliciesResponse$nextMarker' => '<p>The marker for the next set of results, or null if there are no additional results.</p>', 'ListPrincipalPoliciesRequest$marker' => '<p>The marker for the next set of results.</p>', 'ListPrincipalPoliciesResponse$nextMarker' => '<p>The marker for the next set of results, or null if there are no additional results.</p>', ], ], 'MaxResults' => [ 'refs' => [ 'ListThingsRequest$maxResults' => '<p>The maximum number of results.</p>', 'ListTopicRulesRequest$maxResults' => '<p>The maximum number of results to return.</p>', ], ], 'NextToken' => [ 'refs' => [ 'ListPrincipalThingsResponse$nextToken' => '<p>A token used to retrieve the next value.</p>', 'ListThingsRequest$nextToken' => '<p>The token for the next value.</p>', 'ListThingsResponse$nextToken' => '<p>A token used to retrieve the next value.</p>', 'ListTopicRulesRequest$nextToken' => '<p>A token used to retrieve the next value.</p>', 'ListTopicRulesResponse$nextToken' => '<p>A token used to retrieve the next value.</p>', ], ], 'PageSize' => [ 'refs' => [ 'ListCertificatesRequest$pageSize' => '<p>The result page size.</p>', 'ListPoliciesRequest$pageSize' => '<p>The result page size.</p>', 'ListPrincipalPoliciesRequest$pageSize' => '<p>The result page size.</p>', ], ], 'PartitionKey' => [ 'refs' => [ 'KinesisAction$partitionKey' => '<p>The partition key.</p>', ], ], 'PayloadField' => [ 'refs' => [ 'DynamoDBAction$payloadField' => '<p>The action payload.</p>', ], ], 'Policies' => [ 'refs' => [ 'ListPoliciesResponse$policies' => '<p>The descriptions of the policies.</p>', 'ListPrincipalPoliciesResponse$policies' => '<p>The policies.</p>', ], ], 'Policy' => [ 'base' => '<p>Describes an AWS IoT policy.</p>', 'refs' => [], ], 'PolicyArn' => [ 'refs' => [ 'CreatePolicyResponse$policyArn' => '<p>The policy ARN.</p>', 'CreatePolicyVersionResponse$policyArn' => '<p>The policy ARN.</p>', 'GetPolicyResponse$policyArn' => '<p>The policy ARN.</p>', 'GetPolicyVersionResponse$policyArn' => '<p>The policy ARN.</p>', 'Policy$policyArn' => '<p>The policy ARN.</p>', ], ], 'PolicyDocument' => [ 'refs' => [ 'CreatePolicyRequest$policyDocument' => '<p>The JSON document that describes the policy. The length of the <b>policyDocument</b> must be a minimum length of 1, with a maximum length of 2048, excluding whitespace.</p>', 'CreatePolicyResponse$policyDocument' => '<p>The JSON document that describes the policy.</p>', 'CreatePolicyVersionRequest$policyDocument' => '<p>The JSON document that describes the policy.</p>', 'CreatePolicyVersionResponse$policyDocument' => '<p>The JSON document that describes the policy.</p>', 'GetPolicyResponse$policyDocument' => '<p>The JSON document that describes the policy.</p>', 'GetPolicyVersionResponse$policyDocument' => '<p>The JSON document that describes the policy.</p>', ], ], 'PolicyName' => [ 'refs' => [ 'AttachPrincipalPolicyRequest$policyName' => '<p>The policy name.</p>', 'CreatePolicyRequest$policyName' => '<p>The policy name.</p>', 'CreatePolicyResponse$policyName' => '<p>The policy name.</p>', 'CreatePolicyVersionRequest$policyName' => '<p>The policy name.</p>', 'DeletePolicyRequest$policyName' => '<p>The name of the policy to delete.</p>', 'DeletePolicyVersionRequest$policyName' => '<p>The name of the policy.</p>', 'DetachPrincipalPolicyRequest$policyName' => '<p>The name of the policy to detach.</p>', 'GetPolicyRequest$policyName' => '<p>The name of the policy.</p>', 'GetPolicyResponse$policyName' => '<p>The policy name.</p>', 'GetPolicyVersionRequest$policyName' => '<p>The name of the policy.</p>', 'GetPolicyVersionResponse$policyName' => '<p>The policy name.</p>', 'ListPolicyVersionsRequest$policyName' => '<p>The policy name.</p>', 'Policy$policyName' => '<p>The policy name.</p>', 'SetDefaultPolicyVersionRequest$policyName' => '<p>The policy name.</p>', ], ], 'PolicyVersion' => [ 'base' => '<p>Describes a policy version.</p>', 'refs' => [], ], 'PolicyVersionId' => [ 'refs' => [ 'CreatePolicyResponse$policyVersionId' => '<p>The policy version ID.</p>', 'CreatePolicyVersionResponse$policyVersionId' => '<p>The policy version ID.</p>', 'DeletePolicyVersionRequest$policyVersionId' => '<p>The policy version ID.</p>', 'GetPolicyResponse$defaultVersionId' => '<p>The default policy version ID.</p>', 'GetPolicyVersionRequest$policyVersionId' => '<p>The policy version ID.</p>', 'GetPolicyVersionResponse$policyVersionId' => '<p>The policy version ID.</p>', 'PolicyVersion$versionId' => '<p>The policy version ID.</p>', 'SetDefaultPolicyVersionRequest$policyVersionId' => '<p>The policy version ID.</p>', ], ], 'PolicyVersions' => [ 'refs' => [ 'ListPolicyVersionsResponse$policyVersions' => '<p>The policy versions.</p>', ], ], 'Principal' => [ 'refs' => [ 'AttachPrincipalPolicyRequest$principal' => '<p>The principal which can be a certificate ARN (as returned from the CreateCertificate operation] or a Cognito ID.</p>', 'AttachThingPrincipalRequest$principal' => '<p>The principal (certificate or other credential].</p>', 'DetachPrincipalPolicyRequest$principal' => '<p>The principal</p> <p>If the principal is a certificate, specify the certificate ARN. If the principal is a Cognito identity specify the identity ID.</p>', 'DetachThingPrincipalRequest$principal' => '<p>The principal.</p>', 'ListPrincipalPoliciesRequest$principal' => '<p>The principal.</p>', 'ListPrincipalThingsRequest$principal' => '<p>The principal.</p>', ], ], 'PrincipalArn' => [ 'refs' => [], ], 'Principals' => [ 'refs' => [ 'ListThingPrincipalsResponse$principals' => '<p>The principals.</p>', ], ], 'PrivateKey' => [ 'refs' => [ 'KeyPair$PrivateKey' => '<p>The private key.</p>', ], ], 'PublicKey' => [ 'refs' => [ 'KeyPair$PublicKey' => '<p>The public key.</p>', ], ], 'QueueUrl' => [ 'refs' => [ 'SqsAction$queueUrl' => '<p>The URL of the Amazon SQS queue.</p>', ], ], 'RangeKeyField' => [ 'refs' => [ 'DynamoDBAction$rangeKeyField' => '<p>The range key name.</p>', ], ], 'RangeKeyValue' => [ 'refs' => [ 'DynamoDBAction$rangeKeyValue' => '<p>The range key value.</p>', ], ], 'RejectCertificateTransferRequest' => [ 'base' => '<p>The input for the RejectCertificateTransfer operation.</p>', 'refs' => [], ], 'ReplaceTopicRuleRequest' => [ 'base' => '<p>The input for the ReplaceTopicRule operation.</p>', 'refs' => [], ], 'RepublishAction' => [ 'base' => '<p>Describes an action to republish to another topic.</p>', 'refs' => [ 'Action$republish' => '<p>Publish to another MQTT topic.</p>', ], ], 'ResourceAlreadyExistsException' => [ 'base' => '<p>The resource already exists.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource does not exist.</p>', 'refs' => [], ], 'RuleName' => [ 'refs' => [ 'CreateTopicRuleRequest$ruleName' => '<p>The name of the rule.</p>', 'DeleteTopicRuleRequest$ruleName' => '<p>The name of the rule.</p>', 'GetTopicRuleRequest$ruleName' => '<p>The name of the rule.</p>', 'ReplaceTopicRuleRequest$ruleName' => '<p>The name of the rule.</p>', 'TopicRule$ruleName' => '<p>The name of the rule.</p>', 'TopicRuleListItem$ruleName' => '<p>The name of the rule.</p>', ], ], 'S3Action' => [ 'base' => '<p>Describes an action to write data to an Amazon S3 bucket.</p>', 'refs' => [ 'Action$s3' => '<p>Write to an S3 bucket.</p>', ], ], 'SQL' => [ 'refs' => [ 'TopicRule$sql' => '<p>The SQL statement used to query the topic. When using a SQL query with multiple lines, be sure to escape the newline characters properly.</p>', 'TopicRulePayload$sql' => '<p>The SQL statement used to query the topic. For more information, see <a href="http://docs.aws.amazon.com/iot/latest/developerguide/iot-rules.html#aws-iot-sql-reference">AWS IoT SQL Reference</a> in the <i>AWS IoT Developer Guide</i>.</p>', ], ], 'ServiceUnavailableException' => [ 'base' => '<p>The service is temporarily unavailable.</p>', 'refs' => [], ], 'SetAsActive' => [ 'refs' => [ 'AcceptCertificateTransferRequest$setAsActive' => '<p>Specifies whether the certificate is active.</p>', 'CreateCertificateFromCsrRequest$setAsActive' => '<p>Specifies whether the certificate is active.</p>', 'CreateKeysAndCertificateRequest$setAsActive' => '<p>Specifies whether the certificate is active.</p>', ], ], 'SetAsDefault' => [ 'refs' => [ 'CreatePolicyVersionRequest$setAsDefault' => '<p>Specifies whether the policy version is set as the default.</p>', ], ], 'SetDefaultPolicyVersionRequest' => [ 'base' => '<p>The input for the SetDefaultPolicyVersion operation.</p>', 'refs' => [], ], 'SetLoggingOptionsRequest' => [ 'base' => '<p>The input for the SetLoggingOptions operation.</p>', 'refs' => [], ], 'SnsAction' => [ 'base' => '<p>Describes an action to publish to an Amazon SNS topic.</p>', 'refs' => [ 'Action$sns' => '<p>Publish to an SNS topic.</p>', ], ], 'SqlParseException' => [ 'base' => '<p>The Rule-SQL expression can\'t be parsed correctly.</p>', 'refs' => [], ], 'SqsAction' => [ 'base' => '<p>Describes an action to publish data to an SQS queue.</p>', 'refs' => [ 'Action$sqs' => '<p>Publish to an SQS queue.</p>', ], ], 'StreamName' => [ 'refs' => [ 'KinesisAction$streamName' => '<p>The name of the Kinesis stream.</p>', ], ], 'TableName' => [ 'refs' => [ 'DynamoDBAction$tableName' => '<p>The name of the DynamoDB table.</p>', ], ], 'ThingArn' => [ 'refs' => [ 'CreateThingResponse$thingArn' => '<p>The thing ARN.</p>', ], ], 'ThingAttribute' => [ 'base' => '<p>Describes a thing attribute.</p>', 'refs' => [], ], 'ThingAttributeList' => [ 'refs' => [ 'ListThingsResponse$things' => '<p>The things.</p>', ], ], 'ThingName' => [ 'refs' => [ 'AttachThingPrincipalRequest$thingName' => '<p>The name of the thing.</p>', 'CreateThingRequest$thingName' => '<p>The name of the thing.</p>', 'CreateThingResponse$thingName' => '<p>The name of the thing.</p>', 'DeleteThingRequest$thingName' => '<p>The thing name.</p>', 'DescribeThingRequest$thingName' => '<p>The name of the thing.</p>', 'DescribeThingResponse$thingName' => '<p>The name of the thing.</p>', 'DetachThingPrincipalRequest$thingName' => '<p>The name of the thing.</p>', 'ListThingPrincipalsRequest$thingName' => '<p>The name of the thing.</p>', 'ThingAttribute$thingName' => '<p>The name of the thing.</p>', 'UpdateThingRequest$thingName' => '<p>The thing name.</p>', ], ], 'ThingNameList' => [ 'refs' => [ 'ListPrincipalThingsResponse$things' => '<p>The things.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>The rate exceeds the limit.</p>', 'refs' => [], ], 'Topic' => [ 'refs' => [ 'ListTopicRulesRequest$topic' => '<p>The topic.</p>', ], ], 'TopicPattern' => [ 'refs' => [ 'RepublishAction$topic' => '<p>The name of the MQTT topic.</p>', 'TopicRuleListItem$topicPattern' => '<p>The pattern for the topic names that apply.</p>', ], ], 'TopicRule' => [ 'base' => '<p>Describes a rule.</p>', 'refs' => [ 'GetTopicRuleResponse$rule' => '<p>The rule.</p>', ], ], 'TopicRuleList' => [ 'refs' => [ 'ListTopicRulesResponse$rules' => '<p>The rules.</p>', ], ], 'TopicRuleListItem' => [ 'base' => '<p>Describes a rule.</p>', 'refs' => [], ], 'TopicRulePayload' => [ 'base' => '<p>Describes a rule.</p>', 'refs' => [ 'CreateTopicRuleRequest$topicRulePayload' => '<p>The rule payload.</p>', 'ReplaceTopicRuleRequest$topicRulePayload' => '<p>The rule payload.</p>', ], ], 'TransferAlreadyCompletedException' => [ 'base' => '<p>You can\'t revert the certificate transfer because it has already completed.</p>', 'refs' => [], ], 'TransferCertificateRequest' => [ 'base' => '<p>The input for the TransferCertificate operation.</p>', 'refs' => [], ], 'TransferCertificateResponse' => [ 'base' => '<p>The output from the TransferCertificate operation.</p>', 'refs' => [], ], 'TransferConflictException' => [ 'base' => '<p>You can\'t transfer the the certificate because authorization policies are still attached.</p>', 'refs' => [], ], 'UnauthorizedException' => [ 'base' => '<p>You are not authorized to perform this operation.</p>', 'refs' => [], ], 'UpdateCertificateRequest' => [ 'base' => '<p>The input for the UpdateCertificate operation.</p>', 'refs' => [], ], 'UpdateThingRequest' => [ 'base' => '<p>The input for the UpdateThing operation.</p>', 'refs' => [], ], 'UpdateThingResponse' => [ 'base' => '<p>The output from the UpdateThing operation.</p>', 'refs' => [], ], 'UseBase64' => [ 'refs' => [ 'SqsAction$useBase64' => '<p>Specifies whether to use Base64 encoding.</p>', ], ], 'VersionsLimitExceededException' => [ 'base' => '<p>The number of policy versions exceeds the limit.</p>', 'refs' => [], ], 'errorMessage' => [ 'refs' => [ 'CertificateStateException$message' => '<p>The message for the exception.</p>', 'DeleteConflictException$message' => '<p>The message for the exception.</p>', 'InternalException$message' => '<p>The message for the exception.</p>', 'InternalFailureException$message' => '<p>The message for the exception.</p>', 'InvalidRequestException$message' => '<p>The message for the exception.</p>', 'LimitExceededException$message' => '<p>The message for the exception.</p>', 'MalformedPolicyException$message' => '<p>The message for the exception.</p>', 'ResourceAlreadyExistsException$message' => '<p>The message for the exception.</p>', 'ResourceNotFoundException$message' => '<p>The message for the exception.</p>', 'ServiceUnavailableException$message' => '<p>The message for the exception.</p>', 'SqlParseException$message' => '<p>The message for the exception.</p>', 'ThrottlingException$message' => '<p>The message for the exception.</p>', 'TransferAlreadyCompletedException$message' => '<p>The message for the exception.</p>', 'TransferConflictException$message' => '<p>The message for the exception.</p>', 'UnauthorizedException$message' => '<p>The message for the exception.</p>', 'VersionsLimitExceededException$message' => '<p>The message for the exception.</p>', ], ], ], 'service' => '<fullname>AWS IoT (Beta]</fullname> <p><b>AWS IoT is in beta and is subject to change</b></p> <p>AWS IoT provides secure, bi-directional communication between Internet-connected things (such as sensors, actuators, embedded devices, or smart appliances] and the AWS cloud. You can discover your custom IoT-Data endpoint to communicate with, configure rules for data processing and integration with other services, organize resources associated with each thing (Thing Registry], configure logging, and create and manage policies and credentials to authenticate things.</p> <p>For more information about how AWS IoT works, see the <a href="http://docs.aws.amazon.com/iot/latest/developerguide/aws-iot-how-it-works.html">Developer Guide</a>.</p>',];