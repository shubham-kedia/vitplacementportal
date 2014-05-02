/***********************************************************************************
*	(c) Ger Versluis 2000 version 5.411 24 December 2001 (updated Jan 31st, 2003 by Dynamic Drive for Opera7)
*	You may remove all comments for faster loading	          *		
**********************************************************************************/
//	var TradeJunctionroot='http://demotemp54.nic.in/PCISITE/'
//	for local system run
function openUrl(url)
{
	window.open(url)
}
	//alert("")

var TradeJunctionroot='/'
var AppsRoot='http://www.pci.nic.in/CollegesCourses/'
//var AppsRoot='http://192.168.1.12/pci/CollegesCourses/'
//var AppsRoot='http://apps.pcinet.in/pcisite/Colleges_Courses/'

// for web site

	//var TradeJunctionroot='http://demotemp54.nic.in/'

	var NoOffFirstLineMenus=6;			// Number of first level items
	var LowBgColor='#B0D236';			// Background color when mouse is not over
	var LowSubBgColor='#E0E0E0';			// Background color when mouse is not over on subs
	var HighBgColor='#FFFFFF';			// Background color when mouse is over
	var HighSubBgColor='#FFFFFF';			// Background color when mouse is over on subs
	var FontLowColor='#3E81B5';			// Font color when mouse is not over
	var FontSubLowColor='#3E81B5';			// Font color subs when mouse is not over
	var FontHighColor='#3E81B5';			// Font color when mouse is over
	var FontSubHighColor='#3E81B5';			// Font color subs when mouse is over
	var BorderColor='#167D2C';			// Border color
	var BorderSubColor='#167D2C';			// Border color for subs
	var BorderWidth=0;				// Border width
	var BorderBtwnElmnts=1;			// Border between elements 1 or 0
	var FontFamily="Trebuchet MS,arial,comic sans ms,technical"//"Kiran"//// Font family menu items
	var FontSize=9;				// Font size menu items
	var FontBold=1;				// Bold menu items 1 or 0
	var FontItalic=0;				// Italic menu items 1 or 0
	var MenuTextCentered='left';			// Item text position 'left', 'center' or 'right'
	var MenuCentered='left';			// Menu horizontal position 'left', 'center' or 'right'
	var MenuVerticalCentered='top';		// Menu vertical position 'top', 'middle','bottom' or static
	var ChildOverlap=.2;				// horizontal overlap child/ parent
	var ChildVerticalOverlap=.2;			// vertical overlap child/ parent
	var StartTop=276;				// Menu offset x coordinate
	var StartLeft=55;				// Menu offset y coordinate
	var VerCorrect=0;				// Multiple frames y correction
	var HorCorrect=0;				// Multiple frames x correction
	var LeftPaddng=3;				// Left padding
	var TopPaddng=3;				// Top padding
	var FirstLineHorizontal=1;			// SET TO 1 FOR HORIZONTAL MENU, 0 FOR VERTICAL
	var MenuFramesVertical=1;			// Frames in cols or rows 1 or 0
	var DissapearDelay=1000;			// delay before menu folds in
	var TakeOverBgColor=1;			// Menu frame takes over background color subitem frame
	var FirstLineFrame='navig';			// Frame where first level appears
	var SecLineFrame='space';			// Frame where sub levels appear
	var DocTargetFrame='space';			// Frame where target documents appear
	var TargetLoc='';				// span id for relative positioning
	var HideTop=0;				// Hide first level when loading new document 1 or 0
	var MenuWrap=1;				// enables/ disables menu wrap 1 or 0
	var RightToLeft=0;				// enables/ disables right to left unfold 1 or 0
	var UnfoldsOnClick=0;			// Level 1 unfolds onclick/ onmouseover
	var WebMasterCheck=0;			// menu tree checking on or off 1 or 0
	var ShowArrow=1;				// Uses arrow gifs when 1
	var KeepHilite=1;				// Keep selected path highligthed
	var Arrws=['tri.gif',0,0,'tridown.gif',0,0,'trileft.gif',0,0];	// Arrow source, width and height

function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}


// Menu tree
//	MenuX=new Array(Text to show, Link, background image (optional), number of sub elements, height, width);
//	For rollover images set "Text to show" to:  "rollover:Image1.jpg:Image2.jpg"

Menu1=new Array("General Information |","","",7,20,152);
	
	Menu1_1=new Array("About PCI","","",4,25,175);
		Menu1_1_1=new Array("Introduction ",TradeJunctionroot+"GeneralInformation/AboutPCI/Introduction.aspx","",0,25,145);
		Menu1_1_2=new Array("PCI Officers Directory",TradeJunctionroot+"GeneralInformation/PharmacyCouncilofIndia/PCIOfficers.aspx","",0,25,145);
		Menu1_1_3=new Array("Annual Reports","","",8,25,130);
			Menu1_1_3_1=new Array("For 2005 To 2006",TradeJunctionroot+"GeneralInformation/AnnualReports/For2005To2006.aspx","",0,25,180);
			Menu1_1_3_2=new Array("For 2006 To 2007",TradeJunctionroot+"GeneralInformation/AnnualReports/For2006To2007.aspx","",0,25,180);
			Menu1_1_3_3=new Array("For 2007 To 2008",TradeJunctionroot+"GeneralInformation/AnnualReports/For2007T02008.aspx","",0,25,180);
			Menu1_1_3_4=new Array("For 2008 To 2009",TradeJunctionroot+"GeneralInformation/AnnualReports/For2008To2009.aspx","",0,25,180);
			Menu1_1_3_5=new Array("For 2009 To 2010",TradeJunctionroot+"GeneralInformation/AnnualReports/For2009To2010.aspx","",0,25,180);
			Menu1_1_3_6=new Array("For 2010 To 2011",TradeJunctionroot+"GeneralInformation/AnnualReports/For2010To2011.aspx","",0,25,180);
			Menu1_1_3_7=new Array("For 2011 To 2012",TradeJunctionroot+"GeneralInformation/AnnualReports/For2011To2012.aspx","",0,25,180);
			Menu1_1_3_8=new Array("For 2012 To 2013",TradeJunctionroot+"GeneralInformation/AnnualReports/For2012To2013.aspx","",0,25,180);
		Menu1_1_4=new Array("Highlights ",TradeJunctionroot+"GeneralInformation/AboutPCI/Highlights.aspx","",0,25,145);

	Menu1_2=new Array("Council Members","","",7,25,189);
		Menu1_2_1=new Array("Central Council",TradeJunctionroot+"CouncilMembers/CentralCouncil.aspx","",0,25,275,"","","","","");
		Menu1_2_2=new Array("Executive Committee",TradeJunctionroot+"CouncilMembers/ExecutiveCommittee.aspx","",0,25,275,"","","","","");
		Menu1_2_3=new Array("Education Regulations Committee",TradeJunctionroot+"CouncilMembers/EducationRegulationsCommittee.aspx","",0,25,275,"","","","","");
		Menu1_2_4=new Array("Law Committee",TradeJunctionroot+"CouncilMembers/LawCommittee.aspx","",0,25,275,"","","","","");
		Menu1_2_5=new Array("Professional Pharmacy & Public Relation Committee",TradeJunctionroot+"CouncilMembers/ProfessionalPharmacyPublicRelation.aspx","",0,40,275,"","","","","");
		Menu1_2_6=new Array("Finance Committee",TradeJunctionroot+"CouncilMembers/FinanceCommittee.aspx","",0,25,275,"","","","","");
		Menu1_2_7=new Array("PCI Committee on Curbing the Menace of ragging ",TradeJunctionroot+"GeneralInformation/AboutPCI/PCICommitteeonCurbingtheMenaceofragging.aspx","",0,40,350);

	Menu1_3=new Array("PCI Executive ",TradeJunctionroot+"CouncilMembers/Executive.aspx","",0,25,189);
	Menu1_4=new Array("Contact Us",TradeJunctionroot+"GeneralInformation/ContactUs.aspx","",0,25,189,"","","","","");
	Menu1_5=new Array("Guest Book",TradeJunctionroot+"GeneralInformation/GuestBook.aspx","",0,25,189,"","","","","");
	Menu1_6=new Array("Latest News",TradeJunctionroot+"GeneralInformation/LatestNews.aspx","",0,25,189,"","","","","");
	Menu1_7=new Array("State Pharmacy Councils",TradeJunctionroot+"GeneralInformation/StatePharmacyCouncils.aspx","",0,25,189,"","","","","");
	
Menu2=new Array("Rules & Regulations |","","",6,20,147); 
	
	Menu2_1=new Array("Pharmacy Act 1948","","",5,25,300);
			Menu2_1_1=new Array("Chapter 1",TradeJunctionroot+"RulesRegulations/PharmacyAct1948/Chapter1.aspx","",0,25,100);
			Menu2_1_2=new Array("Chapter 2",TradeJunctionroot+"RulesRegulations/PharmacyAct1948/Chapter2.aspx","",0,25,100);
			Menu2_1_3=new Array("Chapter 3",TradeJunctionroot+"RulesRegulations/PharmacyAct1948/Chapter3.aspx","",0,25,100);
			Menu2_1_4=new Array("Chapter 4",TradeJunctionroot+"RulesRegulations/PharmacyAct1948/Chapter4.aspx","",0,25,100);
			Menu2_1_5=new Array("Chapter 5",TradeJunctionroot+"RulesRegulations/PharmacyAct1948/Chapter5.aspx","",0,25,100);

	Menu2_2=new Array("Education Regulations 1991 ","","",5,25,300);
			Menu2_2_1=new Array("Chapter 1",TradeJunctionroot+"RulesRegulations/EducationRegulations1991/Chapter1.aspx","",0,25,100);
			Menu2_2_2=new Array("Chapter 2",TradeJunctionroot+"RulesRegulations/EducationRegulations1991/Chapter2.aspx","",0,25,100);
			Menu2_2_3=new Array("Chapter 3",TradeJunctionroot+"RulesRegulations/EducationRegulations1991/Chapter3.aspx","",0,25,100);
			Menu2_2_4=new Array("Chapter 4",TradeJunctionroot+"RulesRegulations/EducationRegulations1991/Chapter4.aspx","",0,25,100);
			Menu2_2_5=new Array("Appendix ","","",5,25,100);
					Menu2_2_5_1=new Array("Appendix - A",TradeJunctionroot+"RulesRegulations/EducationRegulations1991/Appendix/AppendixA.aspx","",0,25,100);
					Menu2_2_5_2=new Array("Appendix - B",TradeJunctionroot+"RulesRegulations/EducationRegulations1991/Appendix/AppendixB.aspx","",0,25,100);
					Menu2_2_5_3=new Array("Appendix - C",TradeJunctionroot+"RulesRegulations/EducationRegulations1991/Appendix/AppendixC.aspx","",0,25,100);
					Menu2_2_5_4=new Array("Appendix - D",TradeJunctionroot+"RulesRegulations/EducationRegulations1991/Appendix/AppendixD.aspx","",0,25,100);
					Menu2_2_5_5=new Array("Appendix - E",TradeJunctionroot+"RulesRegulations/EducationRegulations1991/Appendix/AppendixE.aspx","",0,25,100);

	Menu2_3=new Array("Amendment to Education Regulation, 1991 ",TradeJunctionroot+"RulesRegulations/AmendmenttoEducationRegulation1991.aspx","",0,25,300);
	Menu2_4=new Array("Pharm.D. Regulations",TradeJunctionroot+"PDF-Files/PharmD-Revised-A.pdf","",0,25,300);
	Menu2_5=new Array("Pharmacy Council Of India Regulations on curbing the Menace of Ragging in Pharmacy Colleges, 2011 (As Approved by Health Ministry vide letter no.V-13012/01/2009-PMS dt.29/02/2012)",TradeJunctionroot+"PDF-Files/Menace-of-Ragging-new.pdf","",0,75,300);
	Menu2_6=new Array("The Education Regulations ",TradeJunctionroot+"GeneralInformation/AboutPCI/TheEducationRegulations.aspx","",0,25,350);


Menu3=new Array("Faculty Database |","","",3,20,147);
	Menu3_1=new Array("Search Faculty","http://pci.nic.in/apps/FacultySearch/Teacher_Details_List.aspx","",0,25,189);
	Menu3_2=new Array("Faculty Database",TradeJunctionroot+"PDF-Files/College_wise_list_of_faculties_in_pharmacy_colleges.pdf","",0,25,189);
	Menu3_3=new Array("Search Principal","http://pci.nic.in/apps/PrincipalDirectory/Principal_Details_Search.aspx","",0,25,189);
	                                                             


Menu4=new Array("Approved Colleges |","","",21,21,150);
	Menu4_1=new Array("Approved Diploma institutions u/s 12 ",TradeJunctionroot+"CollegesCourses/ApprovedDiplomainstitutionsus12.aspx","",0,25,335);
	Menu4_2=new Array("Diploma institutions only for conduct ",TradeJunctionroot+"CollegesCourses/Diplomainstitutionsonlyforconduct.aspx","",0,25,335);
	Menu4_3=new Array("Approved Degree institutions u/s 12 ",AppsRoot+"ApprovedDegreeinstitutionsus12.aspx","",0,25,335);
	Menu4_4=new Array("Degree institutions only for conduct ",TradeJunctionroot+"CollegesCourses/Degreeinstitutionsonlyforconduct.aspx","",0,25,335);
	Menu4_5=new Array("Approved institutions for conduct of Pharm.D and Pharm.D(Post Baccalaureate)",TradeJunctionroot+"CollegesCourses/Baccalaureate.aspx","",0,40,335);
	Menu4_6=new Array("87th Central Council decisions",TradeJunctionroot+"CollegesCourses/Minutes87CC.aspx","",0,25,335);
	Menu4_7=new Array("Recommendations of 236 EC",TradeJunctionroot+"CollegesCourses/Recommendationsof236EC.html","",0,25,335);
	Menu4_8=new Array("Recommendations of 237 EC",TradeJunctionroot+"CollegesCourses/Recommendationsof237EC.html","",0,25,335);
	Menu4_9=new Array("01.088TH Central Council decisions",TradeJunctionroot+"../PDF-Files/01-088.pdf","",0,25,335);
	Menu4_10=new Array("Recommendations of 240 EC",TradeJunctionroot+"CollegesCourses/Recommendationsof240EC.html","",0,25,335);
	Menu4_11=new Array("01.089TH Central Council decisions",TradeJunctionroot+"../PDF-Files/01-089.pdf","",0,25,335);
	Menu4_12=new Array("Recommendations of 242 EC",TradeJunctionroot+"CollegesCourses/Recommendationsof242EC.htm","",0,25,335);
	Menu4_13=new Array("Recommendations of 243 EC",TradeJunctionroot+"CollegesCourses/Recommendationsof243EC.html","",0,25,335);
	Menu4_14=new Array("Latest update as per 243 EC(June,2012)",TradeJunctionroot+"CollegesCourses/17-125.pdf","",0,25,335);
	Menu4_15=new Array("Recommendations of 245 EC",TradeJunctionroot+"CollegesCourses/Recommendationsof245EC.pdf","",0,25,335);
	Menu4_16=new Array("01.090TH Central Council decisions",TradeJunctionroot+"CollegesCourses/01.090.pdf","",0,25,335);
	Menu4_17=new Array("Recommendations of 246 EC",TradeJunctionroot+"CollegesCourses/Recommendationsof246EC.pdf","",0,25,335);
	Menu4_18=new Array("Recommendations of 247 EC",TradeJunctionroot+"CollegesCourses/Recommendationsof247EC.pdf","",0,25,335);
	Menu4_19=new Array("Recommendations of 248 EC",TradeJunctionroot+"CollegesCourses/Recommendationsof248EC.pdf","",0,25,335);
	Menu4_20=new Array("01.092TH Central Council decisions",TradeJunctionroot+"CollegesCourses/01.092.pdf","",0,25,335);
	Menu4_21=new Array("Recommendations of 249 EC",TradeJunctionroot+"CollegesCourses/02.249.pdf","",0,25,335);
	//'Menu4_5=new Array("Advance Search",TradeJunctionroot+"CollegesCourses/AdvanceSearch.aspx","",0,25,295);
	//'Menu4_6=new Array("Faculty Search ",TradeJunctionroot+"CollegesCourses/FacultySearch.aspx","",0,25,295);

Menu5=new Array("Policy & Circulars |","","",8,15,150);
	Menu5_1=new Array("Policy Circulars",TradeJunctionroot+"PolicyCirculars/Circulars.aspx","",0,25,300);
	Menu5_2=new Array("TA/DA Guidelines",TradeJunctionroot+"PolicyCirculars/TADAGuidelines.aspx","",0,25,300);
	Menu5_3=new Array("Clarification reg ER 91 & Pharm D ",TradeJunctionroot+"PolicyCirculars/ClarificationregardingEducationRegulations.aspx","",0,25,300);
	Menu5_4=new Array("Public Notice","","",7,25,300);
			Menu5_4_1=new Array("IInd Shift not allowed by PCI","../PDF-Files/PublicNotice1.pdf","",0,30,350);
			Menu5_4_2=new Array("Not allowed - IInd Shift, admission above sanctioned intake","../PDF-Files/PublicNotice2.pdf","",0,30,350);
			Menu5_4_3=new Array("Advisory to students seeking admission to Pharmacy course","../PDF-Files/Advisory-to-students-seeking-admission-to-Pharmacy-course.pdf","",0,30,350);
			Menu5_4_4=new Array("Last date for submission of SIF","../PDF-Files/Last-date-for-submission-of-SIF.pdf","",0,25,350);
			Menu5_4_5=new Array("Appointment of qualified Teaching Faculty","../PDF-Files/appoinment-of-qualified-teaching-faculty.pdf","",0,25,350);
			Menu5_4_6=new Array("Status of Pending Proposals of Pharmacy Institutions","../PDF-Files/StatusofPendingProposals.doc","",0,25,189);
			Menu5_4_7=new Array("Debarment of Dr. A.K. Ghosh from teaching in PCI approved institutions on account of professional misconduct for a period of 3 years.","../PDF-Files/A.K.Ghosh.pdf","",0,48,300);
	Menu5_5=new Array("PCI Efforts for Pharmacist payscales",TradeJunctionroot+"PolicyCirculars/EffortsofPCIallPharmacypayscales.aspx","",0,25,300);
	Menu5_6=new Array("Non-approval of Ms Programmes",TradeJunctionroot+"RulesRegulations/NonapprovalofProgrammes.aspx","",0,25,300);
	Menu5_7=new Array("PCI/Health Ministry Grant",TradeJunctionroot+"PolicyCirculars/HealthMinistryGrant.aspx","",0,25,300);
	Menu5_8=new Array("Court Judgment",TradeJunctionroot+"PolicyCirculars/CourtJudgment.pdf","",0,25,300);

Menu6=new Array("Procedure/Forms","","",1,20,147);
	Menu6_1=new Array("Procedure & Application Form ",TradeJunctionroot+"CollegesCourses/ProcedureApplicationFormforapproval.aspx","",0,25,335);
