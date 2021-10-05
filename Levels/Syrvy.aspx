<%@ Page Language="VB" AutoEventWireup="false" CodeFile="Syrvy.aspx.vb" Inherits="Levels_Syrvy" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
   
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet" />
    <style>
        .center-div {
            display: flexbox;
            justify-content: center;
            align-items: center;
            height: 50%;
            border: 3px solid green;
        }
    </style>
</head>
<body dir="rtl" style="font-family: 'Cairo', sans-serif;">

    <form id="form1" runat="server">
              <br />

        <div style="font-size: x-large;" class="center-div" runat="server" id="testpanel">
            
            <asp:Wizard ID="Wizard1" runat="server" BackColor="#E6E2D8" BorderColor="#999999" Width="100%" BorderStyle="Solid" BorderWidth="1px" Font-Names="Verdana" Font-Size="0.8em" StartNextButtonText="التالي" FinishPreviousButtonText="السابق" StepNextButtonText="التالي" StepPreviousButtonText="السابق" OnFinishButtonClick="Wizard1_FinishButtonClick" FinishCompleteButtonText="تسليم " DisplaySideBar="false" HeaderText="مقياس الانخراط في التعلم"  StepStyle-Wrap="true" StepStyle-VerticalAlign="Top" NavigationStyle-VerticalAlign="Top" SideBarStyle-VerticalAlign="Top">

                <HeaderStyle BackColor="#666666" BorderColor="#E6E2D8" BorderStyle="Solid" BorderWidth="2px" Font-Bold="True" Font-Size="1.3em" ForeColor="White" HorizontalAlign="Center" Font-Names="'Cairo', sans-serif" />

                <NavigationButtonStyle BackColor="White" BorderColor="#C5BBAF" BorderStyle="Solid" BorderWidth="1px" Font-Names="'Cairo', sans-serif" Font-Size="0.8em" ForeColor="#1C5E55" />
                
                

                <SideBarButtonStyle ForeColor="White" Font-Names="'Cairo', sans-serif"  />

                <SideBarStyle BackColor="#1C5E55" Font-Size="0.9em" VerticalAlign="Top" Font-Names="'Cairo', sans-serif" Height="50%" />
                
                <StepStyle BackColor="#F7F6F3" BorderColor="#E6E2D8" BorderStyle="Solid" BorderWidth="2px" VerticalAlign="Top" CssClass="table-bordered" Font-Names="'Cairo', sans-serif" />

                <StartNextButtonStyle CssClass="btn btn-info" Font-Names="'Cairo', sans-serif"  />

                <StepNextButtonStyle CssClass="btn btn-success " />

                <StepPreviousButtonStyle CssClass="btn btn-info " />

                <FinishPreviousButtonStyle CssClass="btn btn-info " />
                <FinishCompleteButtonStyle CssClass="btn btn-primary" />
                
                <WizardSteps >
                    <%-- 1 --%>
                    <asp:WizardStep ID="WizardStep1" runat="server" Title="1">
                         
                      
                        <h3>
                            1.أندمج بسهولة في بيئة التعلم عندما أتعلم في مقرر البرمجه بلغة سكراتش.
                        </h3>
                        
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList1" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                 
                  <%-- 2 --%>
                    <asp:WizardStep ID="WizardStep2" runat="server" Title="2">
                        
                       
                        <h3>
                            2. يصعب علي الوصول بسرعه لمهام التعلم.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList2" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                     
                  <%-- 3 --%>
                    <asp:WizardStep ID="WizardStep3" runat="server" Title="3">
                        
                      
                        <h3>
                            3.بيئة التعلم لا تقدم لي التغذية الراجعة التي تشجعني علي اكمال المهام المطلوبة.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList3" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                
                      <%-- 4 --%>
                    <asp:WizardStep ID="WizardStep4" runat="server" Title="4">
                        
                     
                        <h3>
                            4. أفضل قضاء الوقت في حل الأنشطه المقدمة لى عبر البيئة عن أي شيء آخر.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList4" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                
                        <%-- 5 --%>
                    <asp:WizardStep ID="WizardStep5" runat="server" Title="5">
                        
                        
                        <h3>
                            5. تزيد الأنشطة الموجودة في البيئة من استيعاب ما اتعلمه.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList5" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                
                        <%-- 6 --%>
                    <asp:WizardStep ID="WizardStep6" runat="server" Title="6">
                        
                         
                        <h3>
                            6. احصل من خلال استخدام بيئة التعلم علي درجات أقل من المعدل المطلوب.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList6" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                
                        <%-- 7 --%>
                    <asp:WizardStep ID="WizardStep7" runat="server" Title="7">
                        
                       
                        <h3>
                            7. اجد صعوبة في تطوير مهاراتي عبر هذه البيئة.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList7" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                
                           <%-- 8 --%>
                    <asp:WizardStep ID="WizardStep8" runat="server" Title="8">
                        
                        
                        <h3>
                            8. تشجعني بيئه التعلم على متابعه الدروس بانتظام.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList8" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                
                           <%-- 9 --%>
                    <asp:WizardStep ID="WizardStep9" runat="server" Title="9">
                        
                       
                        <h3>
                            9. أحرص على الإنجاز لأحصل على تقييم افضل في المجموعه.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList9" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 10 --%>
                    <asp:WizardStep ID="WizardStep10" runat="server" Title="10">
                        
                      
                        <h3>
                            10. أشارك مع فريقى في المهام بنشاط وفاعلية.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList10" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 11 --%>
                    <asp:WizardStep ID="WizardStep11" runat="server" Title="11">
                        
                       
                        <h3>
                            11.انا غير مهتم بإتمام ما كلفت به في مقرر البرمجه بلغه سكراتش.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList11" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 12 --%>
                    <asp:WizardStep ID="WizardStep12" runat="server" Title="12">
                        
                       
                        <h3>
                            12. يصعب علي إنجاز الأنشطة في الوقت المحدد لها.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList12" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 13 --%>
                    <asp:WizardStep ID="WizardStep13" runat="server" Title="13">
                        
                       
                        <h3>
                            13. تتنوع أدواري في المجموعه حسب النشاط الموكل إلي بالبيئة.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList13" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 14 --%>
                    <asp:WizardStep ID="WizardStep14" runat="server" Title="14">
                        
                       
                        <h3>
                            14. أشجع زملائي أثناء أداء المهام.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList14" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 15 --%>
                    <asp:WizardStep ID="WizardStep15" runat="server" Title="15">
                        
                        
                        <h3>
                            15. أنجز الأنشطة لرغبتي فى الحصول علي المكافأت.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList15" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 16 --%>
                    <asp:WizardStep ID="WizardStep16" runat="server" Title="16">
                        
                      
                        <h3>
                            16. اتواصل بفعالية مع فريقي ومعلمي أثناء التعلم.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList16" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 17 --%>
                    <asp:WizardStep ID="WizardStep17" runat="server" Title="17">
                        
                         
                        <h3>
                            17. أشعر بالمتعة والسعاده عند نجاحى في تحدي المهام الصعبه في مقرر البرمجه بلغه سكراتش.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList17" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 18 --%>
                    <asp:WizardStep ID="WizardStep18" runat="server" Title="18">
                        
                         
                        <h3>
18. أشعر بالملل فى التعلم برنامج سكراتش.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList18" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 19 --%>
                    <asp:WizardStep ID="WizardStep19" runat="server" Title="19">
                        
                         
                        <h3>
                            19.أشعر بخيبه الأمل إذا فشلت في تحقيق الأهداف .
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList19" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 20 --%>
                    <asp:WizardStep ID="WizardStep20" runat="server" Title="20">
                        
                         
                        <h3>
                            20. أشعر باللامبالاة عند وجود أنشطة مطلوب تنفيذها داخل البيئة .
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList20" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 21 --%>
                    <asp:WizardStep ID="WizardStep21" runat="server" Title="21">
                        
                         
                        <h3>
                            21. أشعر بالتحدي فى حل الاسئله ببيئة التعلم.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList21" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 22 --%>
                    <asp:WizardStep ID="WizardStep22" runat="server" Title="22">
                        
                         
                        <h3>
                            22. بيئه التعلم ممتعه وجذابه.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList22" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 23 --%>
                    <asp:WizardStep ID="WizardStep23" runat="server" Title="23">
                        
                         
                        <h3>
                            23. أشعر بالحماس لدراسه برنامج سكراتش من اجل تحقيق نتائج جيده في لوحه الصدارة.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList23" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 24 --%>
                    <asp:WizardStep ID="WizardStep24" runat="server" Title="24">
                        
                         
                        <h3>
                            24. أشعر بالرضا فى التعلم برنامج سكراتش من هذه البيئة.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList24" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 25 --%>
                    <asp:WizardStep ID="WizardStep25" runat="server" Title="25">
                        
                         
                        <h3>
                            25.أستمتع بعرض إنجازاتى مع زملائي في الفصل.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList25" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 26 --%>
                    <asp:WizardStep ID="WizardStep26" runat="server" Title="26">
                        
                         
                        <h3>
                            26.أشعر بالقلق اثناء التعلم برنامج سكراتش من هذه البيئة.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList26" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 27 --%>
                    <asp:WizardStep ID="WizardStep27" runat="server" Title="27">
                        
                         
                        <h3>
                            27. أشعر بعدم الرغبة في التعلم بهذه الطريقه في المواد الدراسيه الأخرى.
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList27" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 28 --%>
                    <asp:WizardStep ID="WizardStep28" runat="server" Title="28">
                        
                         
                        <h3>
                                28.أشعر بالاجهاد اثناء اداء الانشطه في البيئة .
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList28" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                       <%-- 29 --%>
                    <asp:WizardStep ID="WizardStep29" runat="server" Title="29">
                        
                       
                        <h3>
                            29. أشعر بأن بيئه التعلم تستغل وقت التعلم بشكل افضل عن التعلم بالطريقة التقليدية.  
                        </h3>
                        <br />
                        <h4>
                            <asp:RadioButtonList ID="RadioButtonList29" runat="server" CssClass="text-right">
                                <asp:ListItem Value="1">
                            موافق بشدة
                                </asp:ListItem>
                                <asp:ListItem Value="2">
                            موافق
                                </asp:ListItem>
                                <asp:ListItem Value="3">
                            محايد
                                </asp:ListItem>
                                <asp:ListItem Value="4">
                            غير موافق
                                </asp:ListItem>
                                <asp:ListItem Value="5">
                                    غير موافق بشدة
                                </asp:ListItem>
                            </asp:RadioButtonList>
                        </h4>

                      
                    </asp:WizardStep>
                 
                </WizardSteps>
            </asp:Wizard>
        </div>
        <div runat="server" id="result">
            <div class="center-div text-center">
                
                <asp:Button ID="Button1" runat="server" Text="متابعة"  CssClass="btn btn-success"/>
            </div>
            
            
        </div>
    </form>
</body>
</html>
